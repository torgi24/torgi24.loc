<div class="container top-filter <?php print $classes;?>">
    <div class="row">
        <div class='top-filter-items'>
            <div class="item">
                <?print theme('breadcrumb', array('breadcrumb'=>drupal_get_breadcrumb()));?>
            </div>
            <div class="count"><?= render($header)?></div>
            <div class="count"><?= render($footer)?></div>
            <div style = 'display:flex'>
                <div id='chess' style="color:#C4C4C4;">
                    <svg width="26" height="18" viewBox="0 0 26 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <rect width="5" height="3"/>
                        <rect x="21" width="5" height="3"/>
                        <rect x="7" width="5" height="3"/>
                        <rect x="14" width="5" height="3"/>
                        <rect y="15" width="5" height="3"/>
                        <rect x="21" y="15" width="5" height="3"/>
                        <rect x="7" y="15" width="5" height="3"/>
                        <rect x="14" y="15" width="5" height="3"/>
                        <rect y="10" width="5" height="3"/>
                        <rect x="21" y="10" width="5" height="3"/>
                        <rect x="7" y="10" width="5" height="3"/>
                        <rect x="14" y="10" width="5" height="3"/>
                        <rect y="5" width="5" height="3"/>
                        <rect x="21" y="5" width="5" height="3"/>
                        <rect x="7" y="5" width="5" height="3"/>
                        <rect x="14" y="5" width="5" height="3"/>
                    </svg>
                </div>
                <div id='list' style="color:#848484;">
                    <svg width="26" height="18" viewBox="0 0 26 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <rect width="5" height="3" />
                        <rect x="7" width="19" height="3" />
                        <rect y="15" width="5" height="3" />
                        <rect x="7" y="15" width="19" height="3" />
                        <rect y="10" width="5" height="3" />
                        <rect x="7" y="10" width="19" height="3" />
                        <rect y="5" width="5" height="3" />
                        <rect x="7" y="5" width="19" height="3"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="list-content">
        <!-- filter -->
            <div class="catalog-container">
                <div id="parameters">
                    <p class="title">Параметры</p>
                    <?= render($exposed)?>
                </div>
            </div>
            <div class="shopping-list">
                <div class="shopping-list-line">
                   <?= render($rows)?>
                </div>
            </div>

        </div>
        <?= render($pager)?>
    </div>
    <style>
       #list,#chess {
         cursor: pointer;
       }
    </style>
    <script>
        let out = localStorage.getItem('output');
        if(out == 1 || localStorage.getItem('output') == null){
            jQuery('.list-product').css('display','none');
            jQuery('.shachmatka-product').css('display','flex');
            jQuery('#chess').css('color','#848484');
            jQuery('#list').css('color','#C4C4C4');
             //jQuery('#list').css('color','red');

        }else{
            jQuery('.shachmatka-product').css('display','none');
            jQuery('.list-product').css('display','flex');
            jQuery('#list').css('color','#848484');
            jQuery('#chess').css('color','#C4C4C4');
        }

        jQuery("#chess").on('click', function(){
        localStorage.setItem('output', 1);

        document.location.reload();
        })

        jQuery("#list").on('click', function(){
        localStorage.setItem('output', 0);

        document.location.reload();
        })
    </script>
</div>
<!--shachmatka-product
shopping-list-line-->
