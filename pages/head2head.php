  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- handmade stylesheet -->
    <link rel="stylesheet" href="./../css/head2head.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Permanent+Marker&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Provides flag images -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"/>
    <!-- provides icons, like the views icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- &icon_names=visibility -->
    <!-- JQuery, necessary for DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" defer></script>
    <script src="./../js/head2head.js" defer></script>
    
    <!-- JS and CSS for DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js" defer></script>
    <!-- cdn for Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts" defer></script>
    <!-- Testing Globe Chart -->
    <script src="https://unpkg.com/three" defer></script>
    <script src="https://unpkg.com/globe.gl" defer></script>

  </head>
  
  <body>
  
    <nav>
      <div class="navbar_icon">
        <img src="./../assets/logo-banner.png">
      </div>
  
      <div class="navbar_links">
        <div class="navbar_link">
          <h3>Live</h3>
        </div>
  
        <div class="navbar_link">
          <h3>Rankings</h3>
        </div>
  
        <div class="navbar_link">
          <h3>Player Profiles</h3>
        </div>
  
        <div class="navbar_link">
          <h3>Monday</h3>
        </div>
  
        <div class="navbar_link">
          <h3>Head-to-Head</h3>
        </div>
  
        <div class="navbar_link">
          <h3>StatZone</h3>
        </div>

        <div class="navbar_link">
          <span class="material-symbols-outlined" style="font-size: 2em;">account_circle</span>
        </div>
      </div>
    </nav>
    
    <section class="comparison_container">
      <div class="comparison_layout">
        <div class="comparison_player_one_bio">
          <div class="playerOne_profilepic">
            <img id="playerone_pic">
          </div>

          <div class="playerone_bioDetails">
            <h3 id="playerone_name"></h3>
            <p id="playerone_home"></p>
            <p id="playerone_pdgaNum"></p>
            <p id="playerone_division"></p>
            <p id="playerone_memberSince"></p>
          </div>
        </div>

        <div class="comparison_center_playerbio"></div>

        <div class="comparison_player_two_bio">
          <div class="playerTwo_profilepic">
            <img id="playertwo_pic">
          </div>

          <div class="playertwo_bioDetails">
            <h3 id="playertwo_name"></h3>
            <p id="playertwo_home"></p>
            <p id="playertwo_pdgaNum"></p>
            <p id="playertwo_division"></p>
            <p id="playertwo_memberSince"></p>
          </div>
        </div>


        <!-- showing main player stats below bio -->
        <div class="comparison_playerone_stats">
          <div class="mainStats_tiles">
            <h3 id="playerone_wins"></h3>
            <p>Wins</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playerone_topTens"></h3>
            <p>Top Tens</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playerone_podiums"></h3>
            <p>Podiums</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playerone_earnings"></h3>
            <p>Earnings</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playerone_rating"></h3>
            <p>Avg. Rating</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playerone_events"></h3>
            <p>Total Events</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playerone_place"></h3>
            <p>Avg. Place</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playerone_strokes"></h3>
            <p>Avg. Strokes</p>
          </div>
        </div>

        <div class="playerstats_center">

        </div>

        <div class="comparison_playertwo_stats">
          <div class="mainStats_tiles">
            <h3 id="playertwo_wins"></h3>
            <p>Wins</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playertwo_topTens"></h3>
            <p>Top Tens</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playertwo_podiums"></h3>
            <p>Podiums</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playertwo_earnings"></h3>
            <p>Earnings</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playertwo_rating"></h3>
            <p>Avg. Rating</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playertwo_events"></h3>
            <p>Total Events</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playertwo_place"></h3>
            <p>Avg. Place</p>
          </div>

          <div class="mainStats_tiles">
            <h3 id="playertwo_strokes"></h3>
            <p>Avg. Strokes</p>
          </div>
        </div>

      </div>
    </section>
    
    
  </body>
  </html>