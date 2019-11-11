<!-- Component cho chức năng show dữ liệu từ db -->
<!-- Created by phuclv - 08/11/2019 -->
<template>
    <div class="student-dashboard">
        <a href="https://www.ominext.com/" title="Trang chủ"><div class="logo"></div></a>
        <div class="nav-left w3-animate-left">
            <ul>
                <li class="active"><i class='fas fa-home' style="font-size:20px; margin:auto; width:18%;"></i><a href="#home">Trang chủ</a></li>
                <li><i class='fas fa-user' style="font-size:20px; margin:auto; width:18%;"></i><a href="#student_manager">Quản lý học sinh</a></li>
                <li><i class="fas fa-book" style="font-size:20px; margin:auto; width:18%;"></i><a href="#subject">Quản lý môn học</a></li>
                <li><i class="fas fa-newspaper" style="font-size:20px; margin:auto; width:18%;"></i><a href="#news">Tin tức</a></li>
                <li><i class="fas fa-cogs" style="font-size:20px; margin:auto; width:18%;"></i><a href="#setting">Cài đặt</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="list-student-comp">
                <div class="header">
                    <h2>Danh sách học sinh</h2>
                    <!--Lắng nghe sự kiện emitted từ component con (ListStudent)-->
                    <div class="btn-container">
                        <button type="button" class="btn btn-add btn-primary glyphicon glyphicon-plus"></button>
                        <button type="button" class="btn btn-edit btn-success glyphicon glyphicon-edit"></button>
                        <button type="button" class="btn btn-delete btn-danger glyphicon glyphicon-trash"></button>
                    </div>
                </div>
                <ListStudent @studentSelected="childrenSelectStudent"></ListStudent>
            </div>
            <div class="student-detail-comp">
                <h2>Thông tin chi tiết</h2>
                <StudentDetail :studentDetailInfo="studentSelectedFromChild"></StudentDetail>
            </div>
        </div>
    </div>
</template>

<!--Script chứa các method, đổ dữ liêu, render, emit thông qua vùng này-->
<script>
    import ListStudent from './ListStudent.vue'
    import StudentDetail from './StudentDetail.vue'
    export default {
        mounted() {
            console.log('Component mounted!')
        },
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
    .header {
        display: inline;
    }
    .header h2 {
        float: left;
        margin: 8px 0 0 0;
    }
    h2 {
        margin-top: 10px;
    }
    .student-dashboard {
        margin: 8px;
    }
    h2 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
    }
    .logo {
        width: 100%;
        height: 29.8vh;
        background-image: url('/images/2.png');
        background-size: 960px;
        cursor: pointer;
        animation: fadein 3s;
        -webkit-animation: fadein 3s;
    }
    @-webkit-keyframes fadein { /* Safari and Chrome */
        from {
            opacity:0;
        }
        to {
            opacity:1;
        }
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 15%;
        background-color: #5DADE2;
        position: fixed;
        height: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
        animation-duration: 3s;
        animation-name: slidein;
    }
    .nav-left {
        width: 15%;
        height: 100%;
    }
    li {
        border-bottom: 1px solid white;
        display: flex;
    }
    li:last-child {
        border-bottom: none;
    }
    li a {
        width: 100%;
        display: block;
        text-decoration: none;
        color: #fff;
        padding: 8px 0px;
    }
    li.active {
        background-color: #4CAF50;
        color: white;
    }
    li:hover:not(.active) {
        background-color: #7DCEA0;
        color: white;
    }
    .container {
        width: auto;
        margin-left: 15%;
        padding: 1px 16px;
        height: 100vh;
        animation: fadein 4s;
        -webkit-animation: fadein 4s;
    }
    .btn {
        width: 40px;
        height: 40px;
        background-repeat: no-repeat;
        margin: 5px 0px 5px 3px;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -o-transform: scale(1);
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
    }
    .btn:hover {
        -webkit-transform: scale(1.15);
        -moz-transform: scale(1.15);
        -o-transform: scale(1.15);
    }
    .btn-container {
        text-align: right;
    }
</style>