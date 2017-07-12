$(function() {
    var words = [
        'créatif',
        'autodidacte',
        'enthousiaste',
        'curieux'
    ];
    i=0;
        // on gere l'affichage du menu responsive pour les écrans inférieur ou égaux a médium <992px
    $(".navbar-responsive").toggle();

    $(".menu").click(function(){
        $(".navbar-responsive").toggle("slow");
    });

        // on gere l'affichage aléatoire des phrases d'accroche du header

    setInterval(function() {
        $("#word").fadeOut(function() {
            $(this).html(words[i = (i+1) % words.length]).fadeIn();
        });
    }, 3000);

    //On gere le scroll vers differents sections du sites
    $(".scroll").click(function(){
        var section = $("." + this.id);
        $("html,body").animate({scrollTop: section.offset().top}, 'slow');
    });

    // on gere l'affichage des progress-bar pour les compétences
    window.sr = ScrollReveal();
    sr.reveal('.progress-bar', {
        origin:'left',
        duration: 2000,
        distance: '100%'
    });

});
