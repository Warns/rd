const mobile = {
    check: function(){
        let check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
    }
};

let el = {
    elements:{
        body: "body",
        header: "header",
        tabs: "header #tabs ul",
        footer: "footer",
        trigger: ".menu-trigger",
    },
    init: function(){
        let _this = this;
        for (i in _this.elements) {
            let el = document.querySelector(_this.elements[i]);
            _this[i] = el;
        }
    }
}


var app = {
    init: function(){
        el.init();
        this.activate();
    },
    activate: function (ID) {
        let a = 0;
        for (i in this.actions) {
          this.actions[i](ID);
          a++;
          if (a == Object.values(this.actions).length) {
            el.body.classList.add("done");
          };
        }
    },
    load: function (url, success, error, method, query) {
        var method = method || "GET";
        var query = query || null;
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
        xhr.open(method, url, true);
        xhr.send(query);
    },
    actions:{
        menu: function(){
            el.trigger.addEventListener("click", function(){
                el.header.classList.toggle("active");
            }, false);
        },
        homeTabs: function(){
            let _this = this;
            if(mobile.check()){
                let heads = document.querySelectorAll(".section-head h2");
                    heads = Array.from(heads);
                let li = "<ul>";
                heads.forEach((elm, index) => {
                    if(elm.getAttribute("id")){
                        li += '<li><a href="#'+elm.getAttribute("id")+'">'+elm.innerHTML+'</a></li>';
                    }
                });

                tabs.innerHTML = li + "</ul>";

                heads.splice(0, 1);

                let focus = 0;

                ts = document.querySelectorAll(el.tabs+" li");

                console.log(ts);

                window.addEventListener("scroll", function(){
                    var s = window.scrollY;
                    for(var i=heads.length-1; i>-1; --i){
                        if(heads[i].offsetTop < s){
                            if(i != focus){
                                focus = i;

                                ts[i].classList.add("active");
                                console.log(focus);
                            }
                            break;
                        }
                    }
                }, false);
            }
        },
        terms: function(){
            let container = document.querySelector(".page-terms .page-body");
            if(container){
                let terms = container.querySelectorAll("a");
                let last = "";
                for(let i=0; i<terms.length; ++i){
                    let letter = terms[i].innerHTML.charAt(0);
                    
                    if(letter != last){
                        last = letter;
                        let span = document.createElement("h3");
                            span.innerText = letter;
                        container.insertBefore(span, terms[i]);
                    }
                }
            }
        },
        aya: function(){
            let url = "https://api.alquran.cloud/v1/ayah/";
            let ayas = document.querySelectorAll("div.aya");

            for( let i=0; i<ayas.length; ++i ){
                let aya = ayas[i].getAttribute("data-number");
                
                console.log(i, ayas.length, aya);
                
                app.load(url + aya, 
                    function(result){
                        let data = JSON.parse(result).data;
                        
                        let html = `
                            <div>${data.text}</div>
                            <ul>
                                <li>${data.surah.englishName}</li>
                                <li>${data.surah.number} / ${data.numberInSurah}</li>
                                <li>${data.surah.name}</li>
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
    }
}

const cookies = {
    data: [],
    opts: {
        element: '#favorites a span',
        name: 'rd_favz',
        days: 1,
    },
    init: function(){
        const _this = this;

        _this.favs = document.querySelector(_this.opts.element);

        _this.check();
    },
    remove: function(id, el){
        const _this = this;
        let n = _this.data.indexOf(id);
        if(n > -1){
            _this.data.splice(n, 1);
            _this.set();
            _this.selectElement(el, false);
        }
    },
    add: function(id, el){
        const _this = this;
        let n = _this.data.indexOf(id);
        if(n < 0){
            _this.data.push(id);
            let value = _this.data.toString();
            _this.set();
            _this.selectElement(el, true);
        }
    },
    set: function(){
        let value = this.data.toString();
        Cookies.set(this.opts.name, value, {expires: this.opts.days});
        this.favs.innerHTML = this.data.length || "";
    },
    check: function(){
        const _this = this;
        let c = Cookies.get(_this.opts.name);

        if(c){
            _this.data = c.split(',').map(Number);
            _this.favs.innerHTML = this.data.length;

            let page = document.querySelector(".page-favorits .page-body");
            if(page){
                app.load(
                    "/ramazandemir/listem?post_ids="+_this.data.toString(),
                    function(data){ 

                        var html = document.createElement("html");
                            html.innerHTML = data;

                        var list = html.querySelector(".page-body");
                        
                        page.innerHTML = list.innerHTML;

                        _this.activate();
                    }, 
                    function(error){
                        console.log(error);
                    }, 
                    "GET", 
                    "post_ids="+_this.data.toString()
                );
            }
            else{
                _this.activate();
            }

        }else{
            _this.favs.innerHTML = "";
            _this.activate();
        }
    },
    activate: function(){
        const _this = this;

        _this.links = [...document.querySelectorAll("a.bookmark")];
        for(var i=0; i<_this.data.length; ++i){
            let _id = _this.data[i];

            const found = _this.links.find(el => el.getAttribute("data-id") == _id);

            if(found){
                _this.selectElement(found, true);
            }
        }
        for(var i=0; i<_this.links.length; ++i){
            let el = _this.links[i];
            el.addEventListener("click", function(){
                if(el.classList.contains("active")){
                    _this.remove(parseInt(el.getAttribute("data-id")), el);
                }else{
                    _this.add(parseInt(el.getAttribute("data-id")), el);
                }
            }, false);
        }
    },
    selectElement: function(el, set){
        if(set){
            el.innerHTML = `<svg class="icon" viewBox="0 0 32 32">
                                <use href="/wp-content/themes/rd/assets/icons/icons.svg#bookmark-full" />
                            </svg>`;
            el.classList.add("active");
        }else{
            el.innerHTML = `<svg class="icon" viewBox="0 0 32 32">
                                <use href="/wp-content/themes/rd/assets/icons/icons.svg#bookmark-add" />
                            </svg>`;
            el.classList.remove("active");
        }
    }
}

window.addEventListener("load", function () {
    app.init();
    cookies.init();
});

// Video Timestamp Navigation
document.addEventListener('DOMContentLoaded', function() {
    // Select all timestamp links
    var timestamps = document.querySelectorAll('.post-body a.timestamp');

    timestamps.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            var time = e.target.getAttribute('data-time');
            var iframe = document.getElementById('youtube-video');
            if (iframe) {
                var videoSrc = iframe.src.split('?')[0];
                iframe.contentWindow.postMessage('{"event":"command","func":"seekTo","args":[' + time + ', true]}', videoSrc);
            }
        });
    });
});

// Helper function to convert time format to seconds
function convertToSeconds(time) {
    var parts = time.split(':');
    return parseInt(parts[0]) * 60 + parseInt(parts[1]);
}