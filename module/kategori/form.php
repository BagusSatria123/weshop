<form action="<?php echo BASE_URL." module/kategori/action.php ";?>"method="POST">

    <div class="element-form">
        <label>Kategori</label>
        <span><input type="text" name="kategori"/></span>
    </div>

    <div class="element-form">
        <label>Status</label>
        <span>
            <input type="radio" name="status" value="on" />ON
            <input type="radio" name="status" value="off" />OFF
        </span>
    </div>

    <div class="element-form">
        <span><input type="submit" name="Add"/></span>
    </div>
</form>