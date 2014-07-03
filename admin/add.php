<!DOCTYPE html>
<html>
    <head>
        <title>Admin - Kriativ</title>
        <link rel="stylesheet" href="../res/style/admin.css">
    </head>
    
    <body>
        
        <form  method="post" action="add.php">
            <div class="title">Add Item</div>
            
            <div class="entry first">
                <div class="label">Type</div>
                <select name="dev_exist"> 
                    <option selected="selected">App</option>
                    <option>Game</option>
                </select>
            </div>
            <div class="entry">
                <div class="label">Developer</div>
                <select name="dev_exist"> 
                    <option selected="selected">Add New Developer</option>
                </select>
                <input type="text" name="dev_new" value="" />
            </div>
            <div class="entry">
                <div class="label">Title</div>
                <select name="title_exist"> 
                    <option selected="selected">Add New Title</option>
                </select>
                <input type="text" name="title_new" value="" />
            </div>
            <div class="entry">
                <div class="label">Image URL</div>
                <input class="long" type="text" name="url" value="" />
            </div>
            <div class="entry">
                <div class="label">Category</div>
                <select name="cat_exist"> 
                    <option selected="selected">Add New Category</option>
                </select>
                <input type="text" name="cat_new" value="" />
            </div>
            <div class="entry">
                <div class="label">Page</div>
                <select name="page_exist"> 
                    <option selected="selected">Add New Page</option>
                </select>
                <input type="text" name="page_new" value="" />
            </div>
            <div class="entry">
                <div class="label">Style</div>
                <select name="style_exist"> 
                    <option selected="selected">Add New Style</option>
                </select>
                <input type="text" name="style_new" value="" />
            </div>
            <div class="entry">
                <div class="label">Tags</div>
                <input class="long" type="text" name="tags" value="" />
            </div>
            <div class="entry first">
                <input class="button" type="reset" name="reset" value="Reset" />
                <input class="button" type="submit" name="submit" value="Add" />
            </div>
        </form>
    </body>
</html>