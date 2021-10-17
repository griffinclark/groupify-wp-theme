// Add your custom JS here.

$('.share-copy').on('click', function (e) {
    e.preventDefault();
    if($(this).hasClass('share-rss-copy')) {
        copyToClipboard(window.location + '/feed');
    }
    else {
        copyToClipboard(window.location);
    }

    setTimeout(function() {
        $(e.target).closest('.share-copy').tooltip('hide');
    }, 1000);
});

$('.share-twitter').on('click', function (e) {
    e.preventDefault();
    var title = $('h1').text();
    OpenShareUrl('https://twitter.com/intent/tweet?url=' + encodeURIComponent(window.location) + '&text=' + encodeURIComponent(title));
});

$('.share-facebook').on('click', function (e) {
    e.preventDefault();
    OpenShareUrl('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location));
});

$('.share-linkedin').on('click', function (e) {
    var title = $('h1').text();

    e.preventDefault();
    OpenShareUrl('https://www.linkedin.com/shareArticle?mini=true&url=' +  encodeURIComponent(window.location) + '&title=' + encodeURIComponent(title));
});
