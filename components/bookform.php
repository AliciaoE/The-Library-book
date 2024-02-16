<div class="bookFormMain">
        <form id="bookform" method="post">
            <div class="bookFormContainer">
            <!-- <fieldset> -->
                <legend>Add a new book</legend>
                <div class="formInput">
                    <section class="inputLeftSide">
                        <p>
                            <label for="title">Title*</label></br>
                            <input type="text" name="title" value="" id="title" placeholder="Title" required />
                        </p>
                        <p>
                            <label for="author">Author*</label><br />
                            <input type="text" name="author" value="" id="author" placeholder="Author" required />
                        </p>
                        <p>
                            <label for="isbn">ISBN*</label><br />
                            <input type="text" name="isbn" value="" id="isbn" placeholder="ISBN" required />
                        </p>
                    </section>
                
                    <aside class="inputRightSide">
                        <p>
                            <label for="description">Description*</label><br />
                            <textarea name="description" id="description" cols="40" rows="10" placeholder="Add a description"></textarea>
                        </p>
                        <p>
                            <label for="uploadPhoto">Image</label>
                            <input type="file" name="photo" id="uploadPhoto" class=""/>
                        </p>
                    </aside>
                </div>
                <div class="buttonSection">
                    <button>Send</button>
                    <button>Back</button>
                </div>
            <!-- </fieldset> -->
            </div>
        </form>
    </div>