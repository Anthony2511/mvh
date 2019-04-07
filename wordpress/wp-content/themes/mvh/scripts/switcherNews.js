$(function () {
    let $newsForm = document.getElementById('filter-news');

    if ($newsForm) {
        $newsForm.classList.remove('hide');

        let $select = document.getElementById('post-filter-news');

        let sFilter = '';

        let aNews = Array.from(document.getElementsByClassName('home-news__bloc'));

        const fFilterNews = (filter) => {
            aNews.forEach((actu) => {
                if (filter == 'none' || actu.classList.contains(filter)) {
                    actu.classList.remove('hide');
                } else {
                    actu.classList.add('hide');
                }
            })
        }

        const fChangeFilter = function (event) {
            sFilter = event.target.value;
            fFilterNews(sFilter);
        }


        $select.addEventListener('change', fChangeFilter);
    }

});