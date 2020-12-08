window.onload = function() {

    let btnRefresh = document.querySelector('#btnRefresh');
    if (btnRefresh) {
        btnRefresh.addEventListener('click', refreshData);
    }

    function refreshData () {

        let xhttp = new XMLHttpRequest();
        xhttp.open("GET", "http://localhost/MVC-prepa-exam/src/api/api.php?getAds=true");
        xhttp.send();
        xhttp.onreadystatechange = function () {

            if (this.readyState === 4 && this.status === 200) {

                let dataApi = JSON.parse(this.responseText);

                let contentAds = document.querySelector('#listAds');

                let html = '';

                for ( ad of dataApi ) {
                    html += ' <div class="card">' +
                        '        <div class="card-header">' + ad.ads_title +
                        '        </div>' +
                        '        <div class="card-body">' +
                        '            <h5 class="card-title">' + ad.ads_price + '€</h5>' +
                        '            <p class="card-text">' + ad.ads_dcs + '</p>' +
                        '            <a href="?page=ad&id=' + ad.ads_id + '" class="btn btn-warning"> voir plus</a>' +
                        '        </div>' +
                        '    </div>';
                }

                contentAds.innerHTML = html;



            }

        }
    }

}