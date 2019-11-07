<template>
    <div class="student-detail">
        <div class="student-detail-container" v-if="Object.keys(studentDetailInfo).length !== 0">
            <div class="student-code">
                Mã:&emsp; {{ studentDetailInfo.student_code }}
            </div>
            <div class="student-name">
                Họ tên:&emsp; {{ studentDetailInfo.student_name }}
            </div>
            <div class="gender">
                Giới tính:&emsp; {{ studentDetailInfo.gender }}
            </div>
            <div class="grade">
                Lớp:&emsp; {{ studentDetailInfo.grade }}
            </div>
            <div class="address">
                Địa chỉ:&emsp; {{ studentDetailInfo.address }}
            </div>
            <div class="email">
                Email:&emsp; {{ studentDetailInfo.email }}
            </div>
            <div class="GPA">
                GPA:&emsp; {{ studentDetailInfo.GPA }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            studentDetailInfo: {
                type: Object
            }
        },
    }
</script>

<style lang="scss" scoped>
</style>