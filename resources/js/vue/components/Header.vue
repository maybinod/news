<template>
    <div class="c-header">
        <a href="/">News Magazine</a>
        <div>
            <a class="active" href="/">Home</a>
            <a href="/">Contact</a>
            <a href="/">About</a>
        </div>
    </div>
</template>

<style lang="scss">
.c-header {
    display: flex;
    justify-content: space-between;
    overflow: hidden;
    background-color: #f1f1f1;
    padding: 20px 10px;

    a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;

        &.active {
            background-color: dodgerblue;
            color: white;
        }

        &:hover {
            background-color: #ddd;
            color: black;
        }
    }
}
</style>
