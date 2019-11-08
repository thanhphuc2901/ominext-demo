<template>
    <div class="list-student">
        <table class="table-list-student">
            <thead>
                <th>Mã</th>
                <th>Họ và tên</th>
                <th>Lớp</th>
                <th>Địa chỉ</th>
            </thead>
            <tbody>
                <tr v-for="student in studentData" @click="selectStudent(student)">
                    <td>{{student.student_code}}</td>
                    <td>{{student.student_name}}</td>
                    <td>{{student.grade}}</td>
                    <td>{{student.address}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import data from './data.json'
    export default {
        data() {
            return {
                studentData: data
            }
        },
        methods: {
            selectStudent(student) {
                this.$emit('studentSelected', student)
            }
        }
    }
</script>

<style lang="scss" scoped>
    .list-student {
        border: 2px solid black;
        border-radius: 5px;
        padding: 10px;
    }
    .table-list-student {
        width: 100%;
        border-collapse: collapse;
    }
    thead {
        background-color: #4CAF50;
    }
    .table-list-student th, .table-list-student td {
        padding: 5px 10px;
        border: 1px solid #ddd;
        padding: 8px;
    }
    th {
        text-align: center;
    }
    .table-list-student tr:nth-child(even){background-color: #f2f2f2;}

    .table-list-student tr:hover {background-color: #ddd;}
</style>