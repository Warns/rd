
var main = {
    init: function(){
        this.activate();
    },

    activate: function(){
        for(i in this.actions){
            this.actions[i]();
        }
    },

    actions:{
        aya: function(){
            let url = "https://api.alquran.cloud/v1/ayah/";
            let ayas = document.querySelectorAll("div.aya");

            for( let i=0; i<ayas.length; ++i ){
                let aya = ayas[i].getAttribute("data-number");
                
                let aa = aya.split(":");
                
                main.load(url + aya, 
                    function(result){
                        let data = JSON.parse(result).data;
                        
                        let html = `
                            <div class="ar">${data.text}
                            <a target="blank" href="http://elktb.net/A/${aa[0]}/${aa[1]}">▲</a>
                            </div>
                            <ul>
                                <li>${data.surah.englishName}</li>
                                <li>${data.surah.number} / ${data.numberInSurah}</li>
                                <li class="ar">${data.surah.name}</li>
                            </ul>
                        `;

                        ayas[i].innerHTML = html;

                    },
                    function(error){
                        console.log(error);
                    }
                )
            }
        }
    },

    load: function (url, success, error) {
        var xhr = new XMLHttpRequest();
        xhr.al
        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              if (success) success(xhr.responseText);
            } else {
              if (error) error(xhr);
            }
          }
        };
        xhr.open("GET", url, true);
        xhr.send();
    },
}

main.init();