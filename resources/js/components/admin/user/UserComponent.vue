<template>
    <div class="container">
        <div class="table-attributes">
            <div></div>
            <form action="" method="post">
                <input type="hidden" name="_token" :value="csrf">
                <input type="text" name="id" placeholder="Введіть id користувача...">
                <button type="submit">Пошук</button>
            </form>
        </div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Ім'я</th>
                <th>Пошта</th>
                <th>Статус</th>
                <th></th>
            </tr>
            <tr v-if="users" v-for="user in users" :key="user.id">
                <td class="item-center">{{ user.id }}</td>
                <td>{{ user.name + ' ' + user.surname }}</td>
                <td class="item-center">{{ user.email }}</td>
                <td class="item-center">
                    <p v-if="user.id === auth.id">ADMIN</p>
                    <form v-else :action="'users/'+user.id + '/change-role'" method="post">
                        <input type="hidden" name="_token" :value="csrf">
                        <select name="userRole" @change="roleChange()">
                            <option value="admin" :selected="user.role === 'admin'">admin</option>
                            <option value="user" :selected="user.role === 'user'">user</option>
                        </select>
                        <button type="submit" class="role-btn" id="changeRole"></button>
                    </form>
                </td>
                <td class="table-buttons">
                    <form v-if="user.id !== auth.id" :action="user.id+'/delete'" method="post">
                        <input type="hidden" name="_token" :value="csrf">
                        <input type="submit" value="Видалити">
                    </form>
                    <form v-else action="" method="post">
                        <input type="button" value="" disabled>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    props: {
        users: String,
        auth: String
    },
    data(){
        return {
            csrf: window.csrfToken
        }
    },
    methods:{
        roleChange(){
            document.getElementById('changeRole').click();
        }
    }
}
</script>
