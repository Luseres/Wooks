<?php get_header(); ?>
<main class="genre-finder">
    <h1>What subscription should I take?</h1>
    <form action=" " name="genrefinder" method="post">
        <label for="" class="wooks__label">
            Favourite type of genre?
        </label>
        <select class="wooks__field" name="genre" id="genre">
            <option value="null" selected>Select your favorite genre...</option>
            <option value="Action">Action</option>
            <option value="Chick lit">Chick lit</option>
            <option value="Fairytale">Fairytale</option>
            <option value="Fiction">Fiction</option>
            <option value="Horror">Horror</option>
            <option value="Romance">Romance</option>
            <option value="Thriller">Thriller</option>
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
<div class="genre-modal">
    <div class="modal-box">
        <h2>Find your genre result:</h2>
        <p>We recommend trying out the genre: <span id="changeme"></span>
        </p>
        <button id="closemodal">X</button>
    </div>
</div>
<script>
    $("form").submit(function(e) {
        e.preventDefault();
        document.getElementById('changeme').innerHTML = document.getElementById('genre').value;
        $(".genre-modal").css("display", "block");
    });

    $("#closemodal").on('click', function(e) {
        $(".genre-modal").css("display", "none");
    })
</script>
<?php get_footer(); ?>