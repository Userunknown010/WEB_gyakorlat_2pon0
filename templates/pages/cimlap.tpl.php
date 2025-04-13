<div class="container mt-4">
    <h2 class="text-center">Üdvözölünk a Receptkeresőben!</h2>
    <p class="text-center">Keress recepteket név alapján, vagy <a href="#food" id="kategorialink">böngéssz a kategóriák</a> között!</p>

    <form method="get" action="" class="d-flex justify-content-center my-4">
        <input type="hidden" name="oldal" value="kereses">
        <input type="text" name="kulcsszo" class="form-control w-50 me-2" placeholder="Pl. lasagne, húsleves..." required>
        <button type="submit" class="btn btn-success">Keresés</button>
    </form>
    
    <div class="row">
        <div class="col-md-6">
            <h3>YouTube videó</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/IRDim2YAZ6Q" 
                title="YouTube videó" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen>
            </iframe>        
        </div>
        <div class="col-md-6">
            <h3>Helyi videó</h3>
            <video width="100%" height="315" controls>
            <source src="videos/video.mp4" type="video/mp4">
            A böngésződ nem támogatja a videólejátszást.
        </video>
        </div>
    </div>

    <div class="row" id="ajanlasok">
        <div class="col-md-4" id="food">
            <h3>Reggeli</h3>
            <ul>
                <li><a href="?oldal=recept&nev=rantotta">Rántotta</a></li>
            </ul>
        </div>
        <div class="col-md-4" id="food">
            <h3>Főételek</h3>
            <ul>
                <li><a href="?oldal=recept&nev=lasagne">Lasagne</a></li>
            </ul>
        </div>
        <div class="col-md-4" id="food">
            <h3>Levesek</h3>
            <ul>
                <li><a href="?oldal=recept&nev=husleves">Húsleves</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6" id="fizcim">
            <div id="fizcim">
                <h3>Fizika cím</h3>
                <iframe width="100%" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3375296155727!2d19.66695091525771!3d46.89607994478184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sPallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar!5e0!3m2!1shu!2shu!4v1475753185783" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br>
                <a target="_blank" id="fiznagyobb" href="https://www.google.hu/maps/place/Pallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar/@46.8960799,19.6669509,17z/data=!3m1!4b1!4m5!3m4!1s0x4743da7a6c479e1d:0xc8292b3f6dc69e7f!8m2!3d46.8960763!4d19.6691396?hl=hu">Nagyobb térkép</a>
            </div>
        </div>
    </div>
</div>