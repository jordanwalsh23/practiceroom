<!-- File: /app/View/Competitions/add.ctp -->

<!-- Begin page content -->
<div class="container fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="page-header">
                <h2>Choose one of your songs to get lyrics written for.</h2>
            </div>
        </div>
    </div>
    
    <form name="selectTrack" action="newCompetition.php" method="POST">
        <div class="row-fluid">
            <div class="span12">
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th style="width:70px;">Selection</th>
                            <th>Track</th>
                        </tr>
                    </thead>

                    <?php
                        foreach ($tracks as &$track) {
                            $track_url = $track->permalink_url;
                            $count = 1;
                            print '<tr>';
                            print "<td onclick='javascript:$(\"#$track->id\").prop(\"checked\",true);'><input type='radio' name='trackselection' id='$track->id' tabindex='$count' value='$track->id'/></td>"; 
                            print '<td>'.$tracks_array[$track_url].'</td>';
                            print '</tr>';
                            $count++;
                        }
                    ?>  
                </table>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span2 offset10">
                <input type="submit" class="btn btn-primary btn-large" value="Select Track"></button>
            </div>
        </div>
    </form>
</div>