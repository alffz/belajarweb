
        <div class="">
            <div class="card" style="width: 18rem;">
                <img src="https://instagram.fkno9-1.fna.fbcdn.net/v/t51.2885-19/s150x150/101826708_256455242132365_3398143356834938880_n.jpg?_nc_ht=instagram.fkno9-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=VAIjvhyJo20AX-RHwz4&tp=1&oh=974d6e3ca5f292d6609802f3cf424f94&oe=6031A749" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <a href="http://localhost:81/mvc/public/about" class="card-link">About</a>
                <h5>halo nama saya adalh <?= $data['nama'] ?></h5>
                
            </div>
        </div>

        <br>
    
        <table class="table">
        <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">pekerjaan</th>
    </tr>
  </thead>
  <tbody><?php $No = 1; ?>
    <?php foreach($data['mahasiswa'] as $mah):?>
    
    <tr>
      <td> <?= $No++ ?></td>
      <td><?= $mah['nama'] ?></td>
      <td><?= $mah['umur'] ?></td>
      <td><?= $mah['pekerjaan'] ?></td>
    </tr>

    <?php endforeach?>
    
  </tbody>
    </table>