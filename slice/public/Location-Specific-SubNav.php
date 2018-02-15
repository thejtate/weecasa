<!DOCTYPE html>
<html>
<?php $title = 'Location-Specific-SubNav'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <section class="section section-top style-b">
    <div class="bg-wrap">
      <div class="bg" style="background-image: url('theme/images/tmp/section-top-img-2.jpg')">
      </div>
    </div>
    <div class="container">
      <div class="title">
        <div class="inner-wrap">
          <img src="theme/images/tmp/sub-title-1.png" alt=""/>
          <h1>Lyons</h1>
          <span>COLORADO</span>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-sub-nav">
    <div class="container">
      <div class="nav">
          <ul>
            <?php $sab_nav = array(
              array("THE HOUSES", "theme/images/tmp/sub-nav-ico-1.png", "theme/images/tmp/sub-nav-ico-1-a.png"),
              array("CITY INFO", "theme/images/tmp/sub-nav-ico-5.png", "theme/images/tmp/sub-nav-ico-5-a.png"),
              array("THINGS TO DO", "theme/images/tmp/sub-nav-ico-3.png", "theme/images/tmp/sub-nav-ico-3-a.png"),
              array("GALLERY", "theme/images/tmp/sub-nav-ico-4.png", "theme/images/tmp/sub-nav-ico-4-a.png"),
            )?>
            <?php foreach ($sab_nav as $element): ?>
              <li>
                <a href="#">
                  <span class="inner-wrap">
                    <span class="ico">
                      <img src="<?php print $element[1]; ?>" alt=""/>
                      <img src="<?php print $element[2]; ?>" alt=""/>
                    </span>
                    <?php print $element[0]; ?>
                  </span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
      </div>
    </div>
    </section>
  <div class="sub-nav-content">
    <div class="nav-item">
      <section class="section section-filters">
        <div class="container">
          <div class="form form-filters">
            <form class="ctools-auto-submit-full-form" action="/location/lyons-co" method="get" id="views-exposed-form-taxonomy-term-page" accept-charset="UTF-8"><div>
                <div class="form-item form-type-select form-item-field-apartment-info-people-list-value">
                  <select id="edit-field-apartment-info-people-list-value" name="field_apartment_info_people_list_value" class="form-select"><option value="All" selected="selected">HOW MANY?</option><option value="1">1 person</option><option value="2">2 people</option><option value="3">3 people</option><option value="4">4 people</option><option value="5">5 people</option><option value="6">6 people</option><option value="7">7 people</option><option value="8">8 people</option><option value="9">9 people</option></select>
                </div>
                <div class="form-item form-type-select form-item-field-apartment-info-sleeps-list-value">
                  <select id="edit-field-apartment-info-sleeps-list-value" name="field_apartment_info_sleeps_list_value" class="form-select"><option value="All" selected="selected">NUMBER OF BEDS</option><option value="1">1 bed</option><option value="2">2 beds</option><option value="3">3 beds</option><option value="4">4 beds</option><option value="5">5 beds</option><option value="6">6 beds</option><option value="7">7 beds</option><option value="8">8 beds</option><option value="9">9 beds</option></select>
                </div>
                <div class="form-item form-type-select form-item-field-apartm-air-condition-list-value">
                  <div class="form-checkboxes bef-select-as-checkboxes"><div class="bef-checkboxes"><div class="form-item form-type-bef-checkbox form-item-edit-field-apartm-air-condition-list-value-yes">
                        <input type="checkbox" name="field_apartm_air_condition_list_value[]" id="edit-field-apartm-air-condition-list-value-yes" value="Yes"  /> <label class='option' for='edit-field-apartm-air-condition-list-value-yes'>Air Condition</label>
                      </div>
                    </div></div>
                </div>
                <div class="form-item form-type-select form-item-field-apartm-full-kitchen-list-value">
                  <div class="form-checkboxes bef-select-as-checkboxes"><div class="bef-checkboxes"><div class="form-item form-type-bef-checkbox form-item-edit-field-apartm-full-kitchen-list-value-yes">
                        <input type="checkbox" name="field_apartm_full_kitchen_list_value[]" id="edit-field-apartm-full-kitchen-list-value-yes" value="Yes"  /> <label class='option' for='edit-field-apartm-full-kitchen-list-value-yes'>Full kitchen</label>
                      </div>
                    </div></div>
                </div>
                <div class="form-item form-type-select form-item-field-apartm-shower-list-value">
                  <div class="form-checkboxes bef-select-as-checkboxes"><div class="bef-checkboxes"><div class="form-item form-type-bef-checkbox form-item-edit-field-apartm-shower-list-value-yes">
                        <input type="checkbox" name="field_apartm_shower_list_value[]" id="edit-field-apartm-shower-list-value-yes" value="Yes"  /> <label class='option' for='edit-field-apartm-shower-list-value-yes'>Shower/Tub Combo</label>
                      </div>
                    </div></div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </section>
      <section class="section section-locations">
      <div class="container">
      <div class="btn-link-wrap">
        <a class="btn style-a" href="#">
          <span class="ico ss-icon ss-glyphish-filled ss-map"></span>
             <span> VIEW LYONS' PROPERTY MAP </span>

        </a>
      </div>
      <div class="items">
      <?php $location_item = array(
        array("Steelhous", "theme/images/tmp/locations-item-img-1.jpg", "5"),
        array("Pequod","theme/images/tmp/locations-item-img-2.jpg", "4"),
        array("Nun’s House","theme/images/tmp/locations-item-img-3.jpg", "2"),
        array("Steelhous","theme/images/tmp/locations-item-img-1.jpg", "5"),
        array("Pequod","theme/images/tmp/locations-item-img-2.jpg", "4"),
        array("Nun’s House","theme/images/tmp/locations-item-img-3.jpg", "2"),
        array("Steelhous","theme/images/tmp/locations-item-img-1.jpg", "5"),
        array("Pequod","theme/images/tmp/locations-item-img-2.jpg", "4"),
        array("Nun’s House","theme/images/tmp/locations-item-img-3.jpg", "2"),
        array("Steelhous","theme/images/tmp/locations-item-img-1.jpg", "5"),
        array("Pequod","theme/images/tmp/locations-item-img-2.jpg", "4"),
        array("Nun’s House","theme/images/tmp/locations-item-img-3.jpg", "2"),
        array("Steelhous","theme/images/tmp/locations-item-img-1.jpg", "5"),
        array("Pequod","theme/images/tmp/locations-item-img-2.jpg", "4"),
        array("Nun’s House","theme/images/tmp/locations-item-img-3.jpg", "2"),
        array("Steelhous","theme/images/tmp/locations-item-img-1.jpg", "5"),
        array("Pequod","theme/images/tmp/locations-item-img-2.jpg", "4"),
        array("Nun’s House","theme/images/tmp/locations-item-img-3.jpg", "2"),
      )?>
      <?php  foreach ($location_item as $element): ?>
        <?php include 'tpl/items/location_item.inc'; ?>
      <?php endforeach; ?>
      </div>
      </div>
      </section>
    </div>
    <div class="nav-item">
      <div class="section section-directions style-a">
        <div class="container">
          <h4>Directions</h4>
          <div class="address">
            501 W Main St, Lyons, CO 80540
          </div>
          <div class="desc">
            <p>
              <strong>Directions from Boulder:</strong> Take US 36 North.  Turn left onto US 36 West/Highway 66.  Go through the town of Lyons and veer to the right heading towards Estes Park.  Turn left immediately after the bridge onto the River Bend property. (If you see Planet Bluegrass, you’ve gone too far.)
            </p>
            <p>
              Directions from Denver: Take I-25 North to the Lyons/Estes Park #243 exit. Head west on Highway 66. Go through the town of Lyons and veer to the right heading towards Estes Park. Turn left immediately after the bridge onto the River Bend property. (If you see Planet Bluegrass, you’ve gone too far.)
            </p>

          </div>
          <p>Questions? Call <a href="tel:720-460-0239">720-460-0239</a></p>
        </div>
        <div class="map">
          <img src="theme/images/tmp/map.jpg" alt=""/>
        </div>
      </div>
      <div class="section section-info style-a">
        <div class="bg-wrap">
          <div class="bg" style="background-image: url('theme/images/tmp/section-img-1.jpg')"></div>
        </div>
        <div class="container">
          <h2>BOOK YOUR TOUR</h2>
          <div class="text">
            <p>
              Private tours by Tiny Experts for $20 per person. Must be scheduled in advance by calling
              <a href="tel:720-460-0239">720-460-0239</a> Ext 3 or emailing <a href="mailto:jenn@weecasa.com">jenn@weecasa.com</a>. Sorry, we cannot accommodate walk-up tours.
            </p>
          </div>
        </div>
      </div>
      <div class="section section-info">
        <div class="bg-wrap">
          <div class="bg" style="background-image: url('theme/images/tmp/section-img-2.jpg')"></div>
        </div>
        <div class="container">
          <h2>LIST YOUR WEE CASA</h2>
          <div class="text">
            <p>
              For more information about listing your own Wee Casa, <br>
              please email <a href="mailto:info@weecasa.com">info@weecasa.com</a>
            </p>
          </div>
        </div>
      </div>
      <div class="section section-info style-a">
        <div class="bg-wrap">
          <div class="bg" style="background-image: url('theme/images/tmp/section-img-3.jpg')"></div>
        </div>
        <div class="container">
          <h2>START YOUR OWN RESORT</h2>
          <div class="text">
            <p>
              For more information about starting your own Wee Casa Resort, <br>
              please email <a href="mailto:info@weecasa.com">info@weecasa.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-item">
      <div class="content-wrapper container">
      <h2>YOUR BASECAMP TO THE ROCKIES</h2>

      <div class="text-small rtecenter">This side of the Great Divide, Lyons is the only gateway to the Rocky Mountain
        National Park and all its glory in between. Area recreation includes mountain biking, hiking, camping, fly
        fishing, climbing and excellent class II-V whitewater kayaking.
      </div>
      <br>
      <br>

      <div class="camp">
      <div class="tabs-nav">
        <div class="item">
          <a href="#block-nature-trails">
                          <span class="ico">
                            <img src="theme/images/tmp/camp-ico-1.png" alt=""/>
                          </span>
            Nature Trails
          </a>
        </div>
        <div class="item">
          <a href="#block-mountain-biking">
                            <span class="ico">
                              <img src="theme/images/tmp/camp-ico-2.png" alt=""/>
                            </span>
            Mountain Biking
          </a>
        </div>
        <div class="item">
          <a href="#block-playgrounds">
                          <span class="ico">
                            <img src="theme/images/tmp/camp-ico-3.png" alt=""/>
                          </span>
            Playgrounds
          </a>
        </div>
        <div class="item">
          <a href="#block-music-festivals">
                          <span class="ico">
                            <img src="theme/images/tmp/camp-ico-4.png" alt=""/>
                          </span>
            Music & Festivals
          </a>
        </div>
        <div class="item">
          <a href="#block-water-sports">
                          <span class="ico">
                            <img src="theme/images/tmp/camp-ico-5.png" alt=""/>
                          </span>
            Water Sports
          </a>
        </div>
        <div class="item">
          <a href="#block-restaurants">
                          <span class="ico">
                            <img src="theme/images/tmp/camp-ico-6.png" alt=""/>
                          </span>
            Restaurants
          </a>
        </div>
        <div class="item">
          <a href="#block-brewery-tours">
                          <span class="ico">
                            <img src="theme/images/tmp/camp-ico-7.png" alt=""/>
                          </span>
            Brewery Tours
          </a>
        </div>
        <div class="item">
          <a href="#block-skiing">
                          <span class="ico">
                            <img src="theme/images/tmp/camp-ico-8.png" alt=""/>
                          </span>
            Skiing
          </a>
        </div>
        <div class="item">
          <a href="#block-horseback-riding">
                          <span class="ico">
                            <img src="theme/images/tmp/camp-ico-9.png" alt=""/>
                          </span>
            Horseback Riding
          </a>
        </div>
        <div class="item">
          <a href="#block-art-culture">
                          <span class="ico">
                            <img src="theme/images/tmp/camp-ico-10.png" alt=""/>
                          </span>
            Art & Culture
          </a>
        </div>
      </div>
      <div class="tabs-content">
        <div class="item" id="item-nature-trails">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-1-a.png" alt=""/>
          </div>
          <h5>NATURE TRAILS</h5>
          <br>

          <div class="text-middle">
            <p>
              Lyons is bordered by Hall Ranch Open Space and Heil Valley Ranch Open Space. Hall Ranch provides over 12
              miles of multi-use trails and consists of 3,206 acres of back country. Heil Valley Ranch consists of 4,923
              acres of back country. Trails are open to hikers, mountain bikers and equestrians. Picture Rock Trail opened
              in September 2008, connecting Heil Valley Ranch trails to Lyons and to Hall Ranch trails. Picture Rock is
              5.5 miles and well designed and built by volunteers. The north end of Picture Rock is at Red Gulch Road,
              then Old St Vrain Road and Highway 7 lead to the Hall Ranch Trailhead or Lyons. The south end of Picture
              Rock is 4.5 miles from the Heil Ranch Trailhead off Lefthand Canyon. Estes Park and Rocky Mountain National
              Park are a short 30 minute drive up US 36 or Highway 7.
            </p>
          </div>
        </div>
        <div class="item" id="item-mountain-biking">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-2-a.png" alt=""/>
          </div>
          <h5>WORLD CLASS MOUNTAIN BIKING</h5>
          <br>

          <div class="text-middle">
            <p>
              Hall Ranch has something for just about everyone. The most commonly ridden trail (Bitterbrush) has a
              challenging technical Rock Garden that only fit expert riders can clean bottom to top. The Nelson Loop up
              top has some beautiful views of the Arapahoe range and Longs Peak in addition to beautiful, flowy
              singletrack. Intermediate riders can find some suitable terrain by starting on the Antelope Trail, that also
              leads to the Nelson trail, but bypasses the technical Rock Garden on Bitterbrush. Check out Redstone Cyclery
              while you’re here!
            </p>
          </div>
        </div>
        <div class="item" id="item-playgrounds">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-3-a.png" alt=""/>
          </div>
          <h5>ADVENTURE PLAYGROUNDS</h5>
          <br>

          <div class="text-middle">
            <p>Just minutes from WeeCasa is LaVern M. Johnson Park (formerly known as Meadow Park), a free town park with
              wonderful play equipment for your kids to run off some energy. Includes a sand volleyball court, small
              splash pad, miniature zipline, climbing structures, picnic areas with grills, and a stream water play
              area.</p>

            <p>Take the extreme challenge and try out the Warrior Playground in Longmont. The Warrior Playground is a
              full-scale American Ninja Warrior and Obstacle Course Race (OCR) training facility for kids and adults to
              experience the thrill of tackling the obstacles they see on the TV show.</p>

            <p>Or give Open Air Adventure Park a shot in Estes Park. Release your aerial monkey on the 32 challenges that
              you can climb on, maneuver over, and swing through during your time on the course.</p>
          </div>
        </div>
        <div class="item" id="item-music-festivals">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-4-a.png" alt=""/>
          </div>
          <h5>MUSIC & FESTIVALS</h5>
          <br>

          <div class="text-x-small rtecenter">
            <p>Two major concerts in Lyons are held at Planet Bluegrass (across the street from WeeCasa). WeeCasa hosts
              musicians and other guests at the Riverbend grounds where hundreds will camp (book your tiny homes well in
              advance if you want to be a part of that).</p>
          </div>
          <br>
          <br>

          <div class="row">
            <div class="col col-sm-6">
              <p>
                <strong>RockyGrass</strong> – A famous bluegrass festival that draws people from across the nation because
                of its nationally known lineup and its general seating in open grassy, treed grounds, at the base of a red
                sandstone mountain along St. Vrain Creek.
              </p>

              <p>
                <strong>Folks Festival</strong> – A folk music festival featuring world renowned acts and local beer.
              </p>

              <p>
                <strong>Wildflower Series</strong> – The Wildflower covered pavilion allows for smaller year-round
                concerts by single musicians. Check Bluegrass.com for all events and sign up to receive news about
                upcoming acts.
              </p>

              <p>
                <strong>Burning Can Festival</strong> – Hosted by Oskar Blues Brewery, this is the perfect blend of
                extreme sports, beer, and bands.
              </p>

              <p>
                <strong>The Sounds of Lyons</strong> – A concert series that began in 2009, bringing in highly acclaimed
                classically trained musicians, including founder MinTze Wu, to perform over one weekend in the spring.
              </p>

              <p>
                <strong>High Street Concerts</strong> – Began in 2001, and concerts take place during the winter months
                bringing national and local acoustic and Americana acts.
              </p>
            </div>
            <div class="col col-sm-6">
              <p>
                <strong>Oskar Blues</strong> – The famous brewery hosts an amateur jam night during the week, and high-end
                folk, rock, blues, and bluegrass bands weekly.
              </p>

              <p>
                <strong>Annual Halloween Parade</strong> – There are more people dressed up in the parade than there are
                spectators! Join us and the Thriller Zombies or march to your own rhythm down Main Street.
              </p>

              <p>
                <strong>Annual Christmas Parade</strong> – This may be the quintessential essence of Lyons pride and love,
                ending with an amazing fireworks display. WeeCasa hosts “Wee Winter Fest“ during this weekend to showcase
                tiny homes and simplified living.
              </p>

              <p>
                <strong>Other Events</strong> – In addition, there are sporadic community concerts and dances throughout
                the year, including weekly summer concerts in Sandstone Park and occasionally at Lyons High School. The
                Red Rock Ramblers, founded by the LaVerne Johnson family and friends, began square dancing in Lyons in
                1958 and offer dances every Saturday during the summer.
              </p>

            </div>
          </div>

        </div>
        <div class="item" id="item-water-sports">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-5-a.png" alt=""/>
          </div>
          <h5>WATER SPORTS</h5>

          <div class="text-middle rtecenter">
            <p>Jump in the cold ice melt waters of the Saint Vrain river located on the WeeCasa property.</p>
          </div>
          <br>

          <div class="text-middle">
            <p>
              <strong>Kayaking</strong> – Lyons Playpark is being rebuilt after the flood in 2013 and will be better than
              ever.
            </p>

            <p>
              <strong>Tubing</strong> – Two amazing rivers meet in the heart of Lyons, providing the perfect backdrop for
              river adventure. Be sure to note the water flow as it changes throughout the season.
            </p>

            <p>
              <strong>Fly Fishing</strong> – WeeCasa guests have access to more than 1000 feet of private river frontage
              along the North Saint Vrain – excellent for catch and release fly fishing. The river abounds with brown,
              rainbow and cutthroat trout! State fishing licenses may be purchased in town at Clarke’s Hardware. Pick up a
              private tour in Estes, or visit Southcreek Ltd shop on High Street to witness hand made custom bamboo fly
              fishing rods by Michael D Clark.
            </p>
          </div>
        </div>
        <div class="item" id="item-restaurants">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-6-a.png" alt=""/>
          </div>
          <h5>RESTAURANTS</h5>

          <div class="text-middle rtecenter">
            <p>The following restaurants are our recommendations to include on your vacation itineraries:</p>
          </div>
          <br>

          <div class="text-middle">
            <p>
              <strong>Lyons Fork</strong> – Dinner with occasional music, also open for weekend brunch (450 Main St).
            </p>

            <p>
              <strong>Farmer Girl</strong> – Features mid/upscale dishes and a nice bar.
            </p>

            <p>
              <strong>Barking Dog Cafe</strong> – Recommended for morning coffee with the locals (447 Main St).
            </p>

            <p>
              <strong>Stone Cup</strong> – Recommended for morning cup of joe, a quick breakfast burrito, and a possible
              live singer (442 High St).
            </p>

            <p>
              <strong>Oskar Blues</strong> – Recommended for the beer tap room, a quick burger, and live bands.
            </p>

            <p>
              <strong>Mojo Taqueria</strong> – Serving up fresh Mexican food and tasty margs (216 Main St).
            </p>

            <p>
              <strong>Smokin Daves BBQ & Taphouse</strong> – Yummy BBQ! (228 Main St).
            </p>

            <p>
              <strong>Lyons Dairy Bar</strong> – You can’t miss the cow spotted walls and crowds lining up for gourmet
              cones in the summer.
            </p>

            <p>
              <strong>Lyons Soda Fountain</strong> – Still features the old style authentic bar (400 Main St).
            </p>

            <p>
              <strong>Julie’s Thai Kitchen</strong> – Authentic ethnic food and great for carry out. (138 Main St).
            </p>

            <p>
              <strong>Pizza Bar 66</strong> – Great for catching a sporting event, a drink, and a pizza pie (kid
              friendly).
            </p>

            <p>
              <strong>Button Rock Bakery</strong> – Grab a cupcake (405B Main St).
            </p>

            <p>
              <strong>Spirit Hound Distillery</strong> – Masters of their craft, this is a fun spot to grab a gin or
              bourbon cocktail.
            </p>
          </div>
        </div>
        <div class="item" id="item-brewery-tours">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-7-a.png" alt=""/>
          </div>
          <h5>BREWERY TOURS</h5>

          <div class="text-middle rtecenter">
            <p>Currently, there are more than 30 craft breweries, distilleries and wineries within a 20-30 minute drive
              from Lyons making the area a prime spot for touring and tasting beer, spirits and wine.</p>
          </div>
        </div>
        <div class="item" id="item-skiing">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-8-a.png" alt=""/>
          </div>
          <h5>SKIING</h5>

          <div class="text-middle rtecenter">
            <p>The closest ski resort, Eldora Mountain Resort, is a 45 minute drive from Lyons. It’s the perfect mountain
              for avoiding the interstate 70 mayhem. It’s off the beaten path, tucked in the nostalgic town of Nederland.
              Skiing Eldora is affordable, the lines are shorter, and it’s family friendly.</p>
          </div>
        </div>
        <div class="item" id="item-horseback-riding">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-9-a.png" alt=""/>
          </div>
          <h5>HORSEBACK RIDING</h5>

          <div class="text-middle rtecenter">
            <p>Trail rides can be accessed in Estes Park.</p>
          </div>
        </div>
        <div class="item" id="item-art-culture">
          <div class="ico">
            <img src="theme/images/tmp/camp-ico-10-a.png" alt=""/>
          </div>
          <h5>ART & CULTURE</h5>

          <div class="text-middle">
            <p>Stroll Main Street and interact with art and sculptures that line the sidewalk. For a small Colorado town,
              Lyons boasts the most sculptures per square feet in one main street area. The Lyons Arts and Humanities
              Council is a group that is instrumental in helping to promote art in downtown Lyons and its ar</p>

            <p>There are several pieces of permanent public art, including sculptures made of local sandstone, such as
              giant eggs, flower containers, a fountain, a small performance stage, and more. In 2008 and 2009, the town
              renovated its two main streets to include sandstone sidewalks and features, floral decorations, seating
              areas and sculptures. It won a Governor’s Award for Downtown Excellence in 2010. As a public community art
              project, a mural depicting life in Lyons, called “Lyons Past, Present and Future”, was placed on the outdoor
              wall of the Visitor Center in June 2003. At that time, the group gave itself the name Confluence Community
              Arts (CoCoA). It is mainly run by Cathy Rivers and Priscalla Cohan, who have gone on to start a second
              project, called The Clarifier Project, which involves the community painting tiles to decorate the old
              circular cement building next to St. Vrain Creek. </p>

            <p>Notable cultural arts residents include artist Barbara Stone, poet George Moore, author Ann Ripley,
              writer/photographer Kathleen Spring, sculptors John King and Bruce Campbell, and artist Candace Shepard, who
              reside in the Lyons area. </p>
          </div>

        </div>
      </div>
      </div>
      <div class="btn-wrap">
        <a class="btn style-b" href="#">
                  <span class="hex">
                      <svg width="104" height="100%">
                        <polygon points="52 0,104 38,104 84,52 124,0 84, 0 38"></polygon>
                      </svg>
                    </span>
                    <span class="hex-hover">
                      <svg width="104" height="100%">
                        <polygon points="52 0,104 38,104 84,52 124,0 84, 0 38"></polygon>
                      </svg>
                    </span>
          BOOK
          NOW
        </a>
      </div>
      </div>
    </div>
    <div class="nav-item">
      <div class="node-gallery">
        <div class="content-wrapper container">
          <h2>WEE PROVIDE VARIETY & COMFORT</h2>

          <div class="text-x-middle rtecenter">
            <p>
              In order to provide a full spectrum of experiences and ways to learn about the industry, WeeCasa features
              different builders to give our guests a full spectrum of experiences and ways to learn about the industry.
              Because homes get moved around each season, the booking page has the most accurate representation of
              what’s available. To see specific rooms and interiors, go to the booking page and click on the slide
              shows.
            </p>
          </div>
          <div class="btn-wrap">
            <a class="btn style-b" href="#">
               <span class="hex">
                     <svg width="104" height="100%">
                       <polygon points="52 0,104 38,104 84,52 124,0 84, 0 38"></polygon>
                     </svg>
                   </span>
                   <span class="hex-hover">
                     <svg width="104" height="100%">
                       <polygon points="52 0,104 38,104 84,52 124,0 84, 0 38"></polygon>
                     </svg>
                   </span>
              BOOK
              NOW
            </a>
          </div>
        </div>
        <section class="section section-slider">
          <div class="b-slider">
            <div class="slider">
              <div class="item">
                <img src="theme/images/tmp/slider-img-1.jpg" alt=""/>
              </div>
              <div class="item">
                <img src="theme/images/tmp/slider-img-2.jpg" alt=""/>
              </div>
              <div class="item">
                <img src="theme/images/tmp/slider-img-3.jpg" alt=""/>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>



  <?php include 'tpl/layout/section-newsletter.inc'; ?>
  <?php include 'tpl/layout/footer.inc'; ?>
</div>
</body>
</html>