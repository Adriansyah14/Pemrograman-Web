const Btn1 = document.getElementById("btn1");
      const Btn2 = document.getElementById("btn2");
      const Uteks = document.getElementById("teks");
      const Uteks2 = document.getElementById("teks2");
      const Fig = document.querySelector("figure");
      const myImg = document.querySelector("div", "img");

      function ubah() {
        Uteks.innerHTML = "Perkenalkan, saya Ahmad Adriansyah Hasibuan dengan NIM 119140079 mahasiswa program studi teknik informatika, Institut Teknologi Sumatera";
        myImg.innerHTML =
          '<img src="fotoo.jpeg" alt="Photo saya" width="150" height="300">';
        Uteks2.innerHTML =
          "Berikut ini salah satu tugas perkuliahan yang telah saya selesaikan";

        var y = document.createElement("iframe");
        y.setAttribute("src", "https://www.youtube.com/embed/Vwt3ibvgHp4");
        y.setAttribute("width", "500");
        y.setAttribute("height", "300");
        y.setAttribute("alt", "Video Tugas");
        Fig.insertAdjacentHTML("afterbegin", y.outerHTML);
      }

      function tingkat() {
        var CreateStyle = document.createElement("style");
        document.head.appendChild(CreateStyle);
        var styles = `
        html{margin: 0;padding: 0;}
        body{
            background-color: #17151f;
        }
        img{
            width: 190px;
            height: 300px;
        }
        .center {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        } 
        p{
            text-align:center;
            font-size:x-large;
            color:#a5c7d9;   
        }
        button {
            background-color: #00008B;
            color: #black;
            border-radius: 30px;
            border: none;
            padding: 10px;
            margin: 10px;
        }
        button:hover {
            color: black;
            background-color: #000000;
            transition: 1s;
        }`;
        var styleSheet = document.querySelector("style");
        styleSheet.innerText = styles;
        document.head.appendChild(styleSheet);
      } 
      Btn1.addEventListener("click", ubah);
      Btn2.addEventListener("click", tingkat);