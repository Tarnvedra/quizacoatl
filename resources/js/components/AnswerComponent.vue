<template>
    <div class="col-sm-8">
        <div class="card text-black bg-white mb-3">
            <div class="card-body">
                <h5 class="card-title">Answer</h5>
                <p class="card-text text-muted" id="answer">#Placeholder for answer#}</p>
            </div>
            <div class="card-footer text-muted">
                <a href="#" class="btn btn-primary">Hide Answer</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AnswerComponent",
    mounted() {
        console.log('Answer Component mounted.')
    }
}
</script>

<style scoped>

</style>
