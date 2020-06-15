<?php get_header(); ?>
<main class="genre-finder">
    <h1>Preferences</h1>
    <form action=" " method="post">
        <label for="" class="wooks__label">
            Favourite type of genre?
        </label>
        <select class="wooks__field">
            <option selected>Select your favorite genre...</option>
            <option>Action</option>
            <option>Chick lit</option>
            <option>Fairytale</option>
            <option>Fiction</option>
            <option>Horror</option>
            <option>Romance</option>
            <option>Thriller</option>
        </select>
        <label for="" class="wooks__label">
            How often do you read books?
        </label>
        <select class="wooks__field">
            <option selected>Select how much you read books...</option>
            <option>Sometimes</option>
            <option>Always</option>
            <option>Useally</option>
            <option>Often</option>
            <option>Never</option>
        </select>
        <label for="" class="wooks__label">
            At what age did you start reading?
        </label>
        <input type="number" min="1" value="16" class="wooks__field">
        <label for="" class="wooks__label">
            How much pages do you prefer?
        </label>
        <select class="wooks__field">
            <option selected>Select how much pages your prefer in a book...</option>
            <option>10</option>
            <option>100</option>
            <option>200</option>
            <option>300</option>
            <option>400+</option>
        </select>
        <a class="no-decoration">
            <button class="wooks__button">
                <span>Submit</span>
            </button>
        </a>
    </form>
</main>
<?php get_footer(); ?>