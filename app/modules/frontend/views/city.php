<?php if ($areas): ?>
   <div class="current_table now">
      <div class="table-block">
         <h3 class='place-title'>
            Райони
         </h3>
         <div class="wrapper-table">
            <div class="table-content">
               <div class="table-row header-table">
                  <div class="col">Стара назва</div>
                  <div class="col">Нова назва</div>
                  <div class="col">Дата прийняття</div>
                  <div class="col">На честь</div>
               </div>
            </div>
            <div class="table-row">
               <div class="left-hand">

               </div>
               <div class="rigth-hand">
                  <?php foreach ($areas as $keyArea => $valueArea): ?>
                     <div class="row">
                        <div class="row-data"><?= Sili::$app->html->encode($valueArea['old_name']) ?></div>
                        <div class="row-data"><?= Sili::$app->html->encode($valueArea['new_name']) ?></div>
                        <div class="row-data">19.02.2016</div>
                        <div class="row-data"></div>
                     </div>
                  <?php endforeach ?>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php endif; ?>
<script type='application/json' id='responce'>
   <?= $jsonRespounce;  ?>
</script>
<?php if ($data): ?>
   <div class="table-block">
      <h3 class='place-title'>
         Вулиці
      </h3>
      <div class="wrapper-table">
         <div class="table-content">
            <div class="table-row header-table streets-table">
               <div class="col">Стара назва</div>
               <div class="col">Нова назва</div>
               <div class="col">Дата прийняття</div>
               <div class="col">На честь</div>
            </div>
         </div>

         <div class="current_table now">
            <?php foreach ($data as $keyLetter => $valueLetter): ?>
               <div class="table-row">
                  <div class="left-hand" data-letter='<?= $keyLetter ?>'>
                     <?= Sili::$app->html->encode($keyLetter) ?>
                  </div>
                  <div class="rigth-hand">
                     <?php foreach ($valueLetter as $keyPlace => $valuePlace): ?>
                        <div class="row">
                           <div class="row-data"><a href="/street/<?= $valuePlace['id'] ?>"><?= Sili::$app->html->encode($valuePlace['old_name']) ?></a></div>
                           <div class="row-data"><?= $valuePlace['new_name'] ?></div>
                           <div class="row-data">
                           <?php if ($valuePlace['project']): ?>
                              <span style='color: #eb2a3c;'>Розглядається</span>
                           <?php else: ?>
                              <?= Sili::$app->html->encode($valuePlace['resolve_date']) ?>
                           <?php endif; ?>
                           </div>
                           <div class="row-data"> 
                              <?php if($valuePlace['eponim']): ?>
                                 <?php 
                                    $res = false;
                                    foreach (['', 'Особа', 'Об’єкт', 'Історична назва', 'Суб’єкт'] as $key => $value) 
                                       if ($valuePlace['eponim_type'] == $key) 
                                          $res = ($valuePlace['eponim'] && $valuePlace['eponim'] != 'історична назва') ? '<a href="'.Sili::$app->html->encode($valuePlace['eponim']).'" target="__blank">'.Sili::$app->html->encode($value).'</a>' : Sili::$app->html->encode($value);
                                    echo $res;
                                  ?>
                              <?php endif; ?>
                           </div>
                        </div>
                     <?php endforeach ?>
                  </div>
               </div>
            <?php endforeach ?>
         </div>
         <div class="search_table">
            
         </div>
      </div>
   </div>
<?php endif; ?>

