<template>
    <div class="student-dashboard">
        <div class="logo"><img src="2.png" alt="Ominext"></div>
        <div class="list-student-comp">
            <h2>Danh sách học sinh</h2>
            <!--Lắng nghe sự kiện emitted từ component con (ListStudent)-->
            <ListStudent @studentSelected="childrenSelectStudent"></ListStudent>
        </div>
        <div class="student-detail-comp">
            <h2>Thông tin chi tiết</h2>
            <StudentDetail :studentDetailInfo="studentSelectedFromChild"></StudentDetail>
        </div>
    </div>
</template>

<!--Script chứa các method, đổ dữ liêu, render, emit thông qua vùng này-->
<script>
    import ListStudent from './ListStudent.vue'
    import StudentDetail from './StudentDetail.vue'
    export default {
        components: {
            ListStudent,
            StudentDetail
        },
        data() {
            return {
                studentSelectedFromChild: {}
            }
        },
        methods: {
            childrenSelectStudent(student) {
                console.log(student)
                this.sudentSelectedFromChild = student;
            }
        }
    }
</script>

<!--Css customize trang web-->
<style lang="scss" scoped>
    h2 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .logo {
        width: 100%;
    }
</style>