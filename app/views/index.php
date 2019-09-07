<?php
date_default_timezone_set('Asia/Dhaka');
$city =  $data['name'];
$ctime =  date('l, F d, Y h:i A', $data['dt']);
$temp_max = $data['main']['temp_max'];
$temp_min = $data['main']['temp_min'];
$temp = round($data['main']['temp']);
$des = $data['weather']['0']['description'];
$icon = $data['weather'][0]['icon'];
$logo = "<img src='http://openweathermap.org/img/w/".$icon.".png'>";
$sunrise =  date('h:i A', $data['sys']['sunrise']);
$sunset =  date('h:i A', $data['sys']['sunset']);
$humidity = $data['main']['humidity'];
$pressure = $data['main']['pressure'];
$wind = $data['wind']['speed'];
?>



<div class="home-inner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="loca-area">
               <h1>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $city?> City
               </h1>
               <h6 class="date-time"><?php echo $ctime?></h6>
            </div>
            <div class="temp-area">
               <p class="max-min">MAX <?php echo $temp_max?> &#8451;  |  MIN <?php echo $temp_min?> &#8451;</p>
               <strong class="text-capitalize"><?php echo $des?></strong>
               <h1 class="row current-temp">
                    <?php echo $logo?>
                    <span><?php echo $temp?>&#8451;</span>
                </h1>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- home-inner end -->
<div class="weather-details">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <section id="weather-card">
               <div class="container">
                  <p class="details">Details</p>
                  <ul class="" style="list-style: none; margin: 0; padding: 0">
                     <li class="dtls-para">Sunrise <span><?php echo $sunrise?></span></li>
                     <li class="dtls-para">Sunset <span><?php echo $sunset?></span></li>
                     <li class="dtls-para">Humidity <span><?php echo $humidity?>%</span></li>
                     <li class="dtls-para">Visibility <span><?php echo $pressure?> hpa</span></li>
                     <li class="wind">
                        <img src="<?=ASSETS_PATH?>img/windmill.png">
                        <ul>
                           <li>Wind</li>
                           <li><?php echo $wind?> km/h SE</li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </section>
            <!-- weather-card section end -->
         </div>
         <div class="col-md-6">
            <section id="weather-card-2">
               <div class="container">
                  <p class="details">7 Days Forecast</p>
                  <div class="weekly-details">
                     <table class="weekly-table">
                        <thead>
                           <tr>
                              <th>Day</th>
                              <th>Clouds</th>
                              <th>Temp</th>
                              <th>Humidity</th>
                              <th>Rain</th>
                           </tr>
                        </thead>
                        <?php $i=1; while($i<=7){?>
                        <tr>
                           
                           <td>
                               <?php 
                               echo date('l', $seven_day['list'][$i]['dt'])
                               ?>
                            </td>
                            
                           <td style="padding-left:0%">
                                <?php
                                $icon =   $seven_day['list'][$i]['weather']['0']['icon'];
                                echo $logo = "<img src='http://openweathermap.org/img/w/".$icon.".png'>"
                                ?>
                           </td>
                           <td>
                              <ul class="list-unstyled">
                                 <li>
                                      <?php echo round($seven_day['list'][$i]["temp"]['max'])?><sup>0</sup><i class="fa fa-long-arrow-up"></i>
                                 </li>
                                 <li> 
                                      <?php echo round($seven_day['list'][$i]["temp"]['min'])?><sup>0</sup><i class="fa fa-long-arrow-down"></i>
                                  </li>
                              </ul>
                           </td>
                           <td style="padding-left:5%">
                           <?php echo $seven_day['list'][$i]["humidity"]?>%
                           </td>
                           <td>
                           <?php
                               if(isset($seven_day['list'][$i]["rain"])){
                                echo $seven_day['list'][$i]['rain'].' mm';
                            }else{
                                
                                echo "0 mm";
                               }?>
                                
                            </td>
                        </tr>
                        <?php  $i++;}?>
                    
                     </table>
                  </div>
                  <!-- weekly-details end -->
               </div>
            </section>
            <!-- weather-card-2 section end -->
         </div>
      </div>
      <!-- row end -->
   </div>
   <!-- container end -->
</div>
<!-- weather-details end -->
</div> 
<!-- dark-overlay end -->
</section>
<!-- body-section end -->