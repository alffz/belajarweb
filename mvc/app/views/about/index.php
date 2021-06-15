
    <h2>ku tuliskan kenangan tentang kita</h2>
    <p>halo nama saya <?php var_dump($data) ?></p>

    <div class="card" style="width: 18rem;">
        <img src="https://instagram.fkno9-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/140009277_420878119157708_2197896910172348471_n.jpg?_nc_ht=instagram.fkno9-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=nNyf-kTp6EQAX839Z50&tp=1&oh=cec44a62e1c66039530488f2e5a6a4d4&oe=6034FB07" class="card-img-top" alt="gambar">
        <div class="card-body">
            <h5 class="card-title"><?= $data['nama'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['umur'] ?></h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link"><?= $data['pekerjaan'] ?></a>
            <a href="http://localhost:81/mvc/public/" class="card-link">Another link</a>

        </div>
    </div>
    <p><?= $datak ?></p>