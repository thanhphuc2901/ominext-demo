<template>
    <div class="conditional-rendering">
        <div class="block">
            <div class="block-1" v-if="currentBlock == 1">
                <div class="square-1 square"></div>
            </div>
            <div class="block-2" v-else-if="currentBlock == 2">
                <div class="square-2 square"></div>
            </div>
            <div class="block-3" v-else>
                <div class="square-3 square"></div>
            </div>
        </div>
        <div class="button">
            <div>
                <button @click="showBlock(1)">Button 1</button>
            </div>
            <div>
                <button @click="showBlock(2)">Button 2</button>
            </div>
            <div>
                <button @click="showBlock(3)">Button 3</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                currentBlock: 1
            }
        },
        methods: {
            showBlock(number) {
                this.currentBlock = number
            }
        }
    }
</script>

<style lang="scss" scoped>
    .square {
        width: 200px;
        height: 200px;
        border: none;
        border-radius: 10px;
    }
    .square-1 {
        background-color: yellow;
    }
    .square-2 {
        background-color: aqua;
    }
    .square-3 {
        background-color: green;
    }
    .block {
        text-align: center;
    }
    .button {
        text-align: center;
    }
    button {
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
    }
</style>