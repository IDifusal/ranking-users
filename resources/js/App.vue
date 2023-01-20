<template>
    <div class="flex flex-col p-20">
        <h1 class="text-3xl font-medium">{{ title }}</h1>
        <table class="ranking mt-5">
            <tr>
                <th>User</th>
                <th>Ranking</th>
                <th>Registered at</th>
            </tr>
            <tr v-for="{name,ranking,email} in arrayInfo">
                <td>{{ name }}</td>
                <td>{{ ranking }}</td>
                <td>{{ email }}</td>
            </tr>
        </table>
    </div>
</template>

<script setup lang="ts">
import { onMounted, ref } from "vue";
const title = ref("Ranking Users");
const arrayInfo = ref<User[]>([]);
const getRanking = () => {
    fetch("http://127.0.0.1:8000/api/ranking")
        .then((response) => response.json())
        .then((data) => (arrayInfo.value = data));
};
onMounted(() => {
    getRanking();
});

interface User{
    name:string,
    ranking:number,
    email:string
}
</script>

<style scoped>
.ranking tr:nth-child(even){background-color: #f2f2f2;}

.ranking tr:hover {background-color: #ddd;}

.ranking th {
  padding: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.ranking td {
  padding: 12px;
}
</style>