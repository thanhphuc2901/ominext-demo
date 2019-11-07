<template>
    <div class="main-container">
        <div class="my-component">{{message.text}}</div>
        <div class="my-component">{{message.type}}</div>
        <div class="rectangle">
            <button class="button" @click="changeText">Change text</button>
            <button class="button" @click="changeType">Change type</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: {
                    type: 'Greeting',
                    text: 'How are you?'
                }
            }
        },
        methods: {
            changeText() {
                this.message.text = 'This is new text!'
            },
            changeType() {
                this.message.type = 'This is new type'
            }
        },
        computed: {
            getType() {
                return this.message.type;
            },
            getText() {
                return this.message.text;
            }
        },
        watch: {
            // message: {
            //     handler: function () {
            //         console.log('something changed!')
            //     },
            //     deep: true
            // }
            getType() {
                console.log('Type changed!')
            },
            getText() {
                console.log('Text changed!')
            }
        }
    }
</script>

<style lang="scss" scoped>
    .main-container {
        width: 100%;
        height: 100vh;
        margin-bottom: 15px;
        background-image: url('/images/1.jpg');
        background-size: cover;
        text-align: center;
    }
    .my-component {
        display: block;
        color: red;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        margin-top: 20px;

    }
    .button {
        width: 140px;
        padding: 15px 25px;
        cursor: pointer;
        font-weight: bold;
        background-color: #4CAF50;
        border-radius: 8px;
        border: none;
        box-shadow: 0 9px #999;
    }
    .button:hover {
        background-color: #3e8e41; 
    }
    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #333;
        transform: translateY(4px);
        outline: none;
    }
    .button:focus {outline:0;}
    .rectangle {
        top: 50px;
        display: inline-block;
        position: relative;
    }
</style>