<template>
    <div class="col-sm-8">
        <div class="card text-black bg-light mb-3">
            <div class="card-body">
                <h5 class="card-title">Question</h5>
                <p class="card-text" id="question">Where is the original Starry Night by Vincent Van Gogh housed? #placeholder#</p>
            </div>
            <div class="card-footer text-muted">
                <a href="#" class="btn btn-danger">Reveal Answer</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "QuestionComponent",
    mounted() {
        console.log('Question Component mounted.')
    }
}
</script>

<style scoped>

</style>
