<main id="main">

    <section class="about">
        <div class="container">
            <div class="row">
                <h1>Welcome</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam harum ad ipsam! Doloremque debitis aut, soluta suscipit necessitatibus vero nisi fugit dolor commodi deserunt quaerat? Quia esse necessitatibus et mollitia.</p>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="content">
                    <?php foreach($data['categories'] as $key => $value): ?>
                    <div class="item">
                        <a href=""><?= $value['title'] ?> </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="news-items">
                    <div class="item">
                        <div class="img" style="background-image: url('https://www.gettyimages.com/gi-resources/images/500px/983794168.jpg');"></div>
                        <div class="content">
                            <?php foreach($data['news'] as $key => $value): ?>
                            <h2><?= $value['title'] ?> </h2>
                            <p>
                                <?= $value['text'] ?> 
                            </p>
                            <a href="">View</a>
                            <?php endforeach; ?>
                        </div>
                        <div class="item">
                        <div class="img" style="background-image: url('https://www.onceuponapicture.co.uk/wp-content/uploads/2019/02/46456227_2504829799542273_7554593422053474304_o-700x525.jpg');"></div>
                        <div class="content">
                            <h2>News 2</h2>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <a href="">View</a>
                        </div>
                        <div class="item">
                        <div class="img"></div>
                        <div class="content">
                            <h2>News 3</h2>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>