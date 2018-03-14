<div class="container">

  <div class="row">

    <div class="col-lg-5 col-xs-12 homecol1">



      <div class="container">


        <!-- Form code begins -->
        <form method="post">
          <div class="form-group">
            <!-- Date input -->
            <label class="control-label" for="date"></label>


            <p class="sanlaiks">Saņemšanas datums/laiks</p>

            <div class="row">

              <div class="col-lg-6 col-xs-12">
                <input class="form-control " id="date" name="date" placeholder="<?php echo " " . date("d-m-Y ") ." ";?> " type="text" />
              </div>

              <div class="col-lg-6 col-xs-12">
                <input class="form-control" id="time" name="time" placeholder="<?php echo " " . date("h:i:sa ");?>" type="text" />
              </div>

            </div>


            <div class="row">

              <div class="col-lg-12 col-xs-12">

                <!-- Dropdown-->
                <div class="form-group">
                  <label for="sel1"></label>
                  <p class="sanlaiks">Saņemšanas vieta</p>
                  <select class="form-control" id="sel1">
                  <option>Rīga</option>
                  <option>Cēsis</option>
                  <option>Valmiera</option>
                  <option>Sigulda</option>
                </select>
                </div>
              </div>

            </div>


            <p class="sanlaiks"><span class="glyphicon glyphicon-map-marker"></span>Nevar atrast? Skatīt Kartē</p>

            <!-- sanemsanas datums/laiks-->
            <p class="sanlaiks">Saņemšanas datums/laiks</p>

            <div class="row">

              <div class="col-lg-6 col-xs-12">

                <input class="form-control " id="date" name="date" placeholder="<?php echo " " . date("d-m-Y ") ." ";?> " type="text" />

              </div>

              <div class="col-lg-6 col-xs-12">

                <input class="form-control" id="time" name="time" placeholder="<?php echo " " . date("h:i:sa ");?>" type="text" />
              </div>



            </div>

            <div class="row">

              <div class="col-lg-12 col-xs-12">

                <!-- Dropdown-->
                <div class="form-group">
                  <label for="sel1"></label>
                  <p class="sanlaiks">Saņemšanas vieta</p>
                  <select class="form-control" id="sel1">
                  <option>Cēsis</option>
                  <option>Rīga</option>
                  <option>Valmiera</option>
                  <option>Sigulda</option>
                </select>
                  <br>
                  <p class="tadapati"><input type="checkbox" name="vehicle" value="Bike">Tāda pati kā saņemšanas vieta</p>
                </div>
              </div>

              


              <div class="row">

                <div class="col-lg-6 col-xs-6 text-center">
                  <p><input type="radio" name="gender" value="male">200km</p>
                </div>

                <div class="col-lg-6 col-xs-6">
                  <p><input type="radio" name="gender" value="male">Bez ierobežojuma</p>
                </div>

              </div>
              


              <div class="col-lg-12 col-xs-12">
                <input class="form-control " id="date" name="date" placeholder="VIP Kods " type="text" />
              </div>


              <!-- Submit button -->
              <div class="row">
                <div class="col-lg-12 col-xs-12 col-lg-offset-9 col-xs-offset-9">
                  <br>
                  <p><button class="btn submitpoga" name="submit" type="submit">REZERVĒT AUTO</button></p>
                </div>
              </div>

        </form>


        <!-- Form code ends -->

        </div>
        </div>
      </div>
    </div>


    <div class="col-lg-7 col-xs-12 boximage1col">
      <img class="boximage1" src="images/mainimage.jpg" style="height: 100%;" alt="">
    </div>
  </div>
</div>
</div>