<style>
    .container {
        margin: 0 auto;
        padding: 40px;
        width: 80%;
        color: #333;
        background: #419be0;
    }

    .slick-slide {
        text-align: center;
        color: #419be0;
        background: white;
    }
</style>
<div class='container'>
    <div class='single-item'>
        <div><h3>1</h3></div>
        <div><h3>2</h3></div>
        <div><h3>3</h3></div>
        <div><h3>4</h3></div>
        <div><h3>5</h3></div>
        <div><h3>6</h3></div>
    </div>
</div>
<script>
    jQuery(".single-item").slick({
        dots: true
    });

</script>