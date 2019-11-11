<!-- Component cho chức năng Thêm thông tin -->
<!-- Created by phuclv - 11/11/2019 -->
<template>
<div>
    <h1>Tạo mới thông tin học sinh</h1>
    <form @submit.prevent="addStudent">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Mã sinh viên:</label>
                    <input type="text" class="form-control" v-model="student.code">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Họ và tên:</label>
                    <input type="text" class="form-control" v-model="student.name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Giới tính:</label>
                    <select id="gender" class="form-control" v-model="gender">
                        <option value = "0">Nam</option>
                        <option value = "1">Nữ</option>
                        <option value = "2">Khác</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Lớp:</label>
                    <select id="grade" class="form-control" v-model="grade">
                        <option value = "0">Lớp 10</option>
                        <option value = "1">Lớp 11</option>
                        <option value = "2">Lớp 12</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Địa chỉ:</label>
                    <textarea class="form-control" v-model="address" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" v-model="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>GPA:</label>
                    <input type="number" class="form-control" v-model="GPA">
                </div>
            </div>
        </div><br />
        <div class="form-group">
            <button class="btn btn-primary">Tạo mới</button>
        </div>
    </form>
</div>
</template>

<script>
    export default {
        data(){
        return {
          post:{}
        }
    },
    methods: {
      addPost(){
        console.log(this.post);
      }
    }
  }
</script>