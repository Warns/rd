<div class="post-foot">
    <div>
        <?php the_tags('Kavramlar: '); ?>
    </div>
    <div>
        <?php

        $suras = "Fâtiha|Bakara|Âl-i İmrân|Nisâ|Mâide|En'âm|A'râf|Enfâl|Tevbe|Yûnus|Hûd|Yûsuf|Ra'd|İbrâhîm|Hicr|Nahl|İsrâ|Kehf|Meryem|Tâhâ|Enbiyâ|Hac|Mü'minûn|Nûr|Furkân|Şuarâ|Neml|Kasas|Ankebût|Rûm|Lokmân|Secde|Ahzâb|Sebe'|Fâtır|Yâsîn|Sâffât|Sâd|Zümer|Mü'min|Fussilet|Şûrâ|Zuhruf|Duhân|Câsiye|Ahkâf|Muhammed|Fetih|Hucurât|Kâf|Zâriyât|Tûr|Necm|Kamer|Rahmân|Vâkıa|Hadîd|Mücâdele|Haşr|Mümtehine|Saf|Cuma|Münâfikûn|Tegâbün|Talâk|Tahrîm|Mülk|Kalem|Hâkka|Meâric|Nûh|Cin|Müzzemmil|Müddessir|Kıyâmet|İnsân|Mürselât|Nebe|Naziât|Abese|Tekvîr|İnfitâr|Mutaffifîn|İnşikâk|Burûc|Târık|A'lâ|Gâşiye|Fecr|Beled|Şems|Leyl|Duhâ|İnşirâh|Tîn|Alak|Kadir|Beyyine|Zilzâl|Âdiyât|Kâria|Tekâsür|Asr|Hümeze|Fîl|Kureyş|Maûn|Kevser|Kâfirûn|Nasr|Tebbet|İhlâs|Felak|Nâs";
        $suras = explode("|", $suras);

        $obj = get_field('sure_select');
        $arr = [];

        if(sizeof($obj) > 0){
            foreach($obj as $i){
                array_push($arr, $suras[$i-1]);
            }

            echo "İlgili süreler: " . implode(", ", $arr);
        }

        ?>
    </div>
</div>