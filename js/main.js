var main = {
    init: function(){
        this.activate();
        this.toggleSidebar(); // Call the toggle function when initializing
    },

    activate: function(){
        for(let i in this.actions){
            this.actions[i]();
        }
    },

    actions:{
        aya: function(){
            let url = "https://api.alquran.cloud/v1/ayah/";
            let ayas = document.querySelectorAll("div.aya");

            for(let i = 0; i < ayas.length; ++i) {
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
        },

        toggleSidebar: function() {
            document.querySelector(".menu-toggle").addEventListener("click", function() {
                let sidebar = document.querySelector(".entry-sidebar-inside-mobile");
                let button = document.querySelector(".menu-toggle");
                let arrow = document.querySelector(".menu-toggle .arrow");
                if (sidebar.classList.contains('active')) {
                    sidebar.classList.remove('active');
                    button.classList.remove('active');
                    arrow.innerHTML = '&#x25BC;';
                } else {
                    sidebar.classList.add('active');
                    button.classList.add('active');
                    arrow.innerHTML = '&#x25B2;';
                }
            });
        },

        sidebar: function(){
            // Fetch both sidebars
            let sidebars = [document.querySelector(".entry-sidebar-inside-desktop"), document.querySelector(".entry-sidebar-inside-mobile")];
        
            for (let sidebar of sidebars) {
                if(sidebar) {
                    let ul = document.createElement("ul");
                    let title = document.createElement("span");
                    let Hs = document.querySelectorAll(".wp-block-heading");
                    if(Hs.length > 0) {
                        for(var i = 0; i < Hs.length; ++i) {
                            let h = Hs[i];
                            h.setAttribute("id", "section-"+i);
        
                            let li = document.createElement("li");
                            li.setAttribute("class", h.tagName);
                            li.innerHTML = `<a href="#section-${i}">${h.innerHTML}</a>`;
        
                            ul.appendChild(li);
                        }
                        // Only add the title "İÇİNDEKİLER" for the desktop sidebar
                        if(sidebar.classList.contains("entry-sidebar-inside-desktop")) {
                            title.innerText = "İÇİNDEKİLER";
                            sidebar.appendChild(title);
                        }
                        sidebar.appendChild(ul);
                    }
                }
            }
        }
    },

    load: function (url, success, error) {
        var xhr = new XMLHttpRequest();
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
    }
}

main.init();
