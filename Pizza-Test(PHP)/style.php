<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root {
    --red: #ff2600;
}

* {
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

*::selection {
    background: var(--red);
    color: #fff;
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
}

body {
    background: #f7f7f7;
}

/* header section nav bar-------------------------------------------------------------------------------------- */
section {
    padding: 2rem 9%;
}

.heading {
    text-align: center;
    font-size: 3.5rem;
    padding: 1rem;
    color: #666;
}

.heading span {
    color: var(--red);
}

.btn {
    display: inline-block;
    padding: .8rem 3rem;
    border: .2rem solid var(--red);
    color: var(--red);
    cursor: pointer;
    font-size: 1.7rem;
    border-radius: .5rem;
    position: relative;
    overflow: hidden;
    z-index: 0;
    margin-top: 1rem;
}

.btn::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 0%;
    height: 100%;
    background: var(--red);
    transition: .3s linear;
    z-index: -1;
}

.btn:hover::before {
    width: 100%;
    left: 0;
}

.btn:hover {
    color: #fff;
}

header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    padding: 2rem 9%;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
}

header .logo {
    font-size: 2.5rem;
    font-weight: bolder;
    color: #666;
}

header .logo i {
    padding-right: .5rem;
    color: var(--red);
}

header .navbar a {
    font-size: 2rem;
    margin-left: 2rem;
    color: #666;
}

header .navbar a:hover {
    color: var(--red);
}

#menu-bar {
    font-size: 3rem;
    cursor: pointer;
    color: #666;
    border: .1rem solid #666;
    border-radius: .3rem;
    padding: .5rem 1.5rem;
    display: none;
}





/* home section ------------------------------------------------------------------------------------- */

.home {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    min-height: 100vh;
    align-items: center;
    background: url(../images/home-bg.jpg) no-repeat;
    background-size: cover;
    background-position: center;
}

.home .content {
    flex: 1 1 40rem;
    padding-top: 6.5rem;
}

.home .image {
    flex: 1 1 40rem;
}

.home .image img {
    width: 100%;
    padding: 1rem;
    animation: float 3s linear infinite;
}

@keyframes float {

    0%,
    100% {
        transform: translateY(0rem);
    }

    50% {
        transform: translateY(3rem);
    }
}

.home .content h3 {
    font-size: 5rem;
    color: #333;
}

.home .content p {
    font-size: 1.7rem;
    color: #666;
    padding: 1rem 0;
}

.speciality .box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.speciality .box-container .box {
    flex: 1 1 30rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    border: .1rem solid rgba(0, 0, 0, .3);
    cursor: pointer;
    border-radius: .5rem;
}

.speciality .box-container .box .image {
    height: 100%;
    width: 100%;
    object-fit: cover;
    position: absolute;
    top: -100%;
    left: 0;
}

.speciality .box-container .box .content {
    text-align: center;
    background: #fff;
    padding: 2rem;
}

.speciality .box-container .box .content img {
    margin: 1.5rem 0;
}

.speciality .box-container .box .content h3 {
    font-size: 2.5rem;
    color: #333;
}

.speciality .box-container .box .content p {
    font-size: 1.6rem;
    color: #666;
    padding: 1rem 0;
}

.speciality .box-container .box:hover .image {
    top: 0;
}

.speciality .box-container .box:hover .content {
    transform: translateY(100%);
}

.popular .box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.popular .box-container .box {
    padding: 2rem;
    background: #fff;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    border: .1rem solid rgba(0, 0, 0, .3);
    border-radius: .5rem;
    text-align: center;
    flex: 1 1 30rem;
    position: relative;
}

.popular .box-container .box img {
    height: 25rem;
    object-fit: cover;
    width: 100%;
    border-radius: .5rem;
}

.popular .box-container .box .price {
    position: absolute;
    top: 3rem;
    left: 3rem;
    background: var(--red);
    color: #fff;
    font-size: 2rem;
    padding: .5rem 1rem;
    border-radius: .5rem;
}

.popular .box-container .box h3 {
    color: #333;
    font-size: 2.5rem;
    padding-top: 1rem;
}

.popular .box-container .box .stars i {
    color: gold;
    font-size: 1.7rem;
    padding: 1rem .1rem;
}

.steps {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    padding: 1rem;
}

.steps .box {
    flex: 1 1 25rem;
    padding: 1rem;
    text-align: center;
}

.steps .box img {
    border-radius: 50%;
    border: 1rem solid #fff;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
}

.steps .box h3 {
    font-size: 3rem;
    color: #333;
    padding: 1rem;
}

.gallery .box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.gallery .box-container .box {
    height: 25rem;
    flex: 1 1 30rem;
    border: 1rem solid #fff;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    border-radius: .5rem;
    position: relative;
    overflow: hidden;
}

.gallery .box-container .box img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.gallery .box-container .box .content {
    position: absolute;
    top: -100%;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(255, 255, 255, .9);
    /* padding:2rem; */
    padding-top: 5rem;
    text-align: center;
}

.gallery .box-container .box .content h3 {
    font-size: 2.5rem;
    color: #333;
}

.gallery .box-container .box .content p {
    font-size: 1.5rem;
    color: #666;
    padding: 1rem 0;
}

.gallery .box-container .box:hover .content {
    top: 0;
}



.footer {
    background: #000;
    text-align: center;
}

.footer .share {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
}

.footer .credit {
    padding: 2.5rem 1rem;
    color: #fff;
    font-weight: normal;
    font-size: 2rem;
}

.footer .credit span {
    color: var(--red);
}


.loader-container {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10000;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
}

.loader-container.fade-out {
    top: -120%;
}





/* media queries  */

@media(max-width:991px) {

    html {
        font-size: 55%;
    }

    header {
        padding: 2rem;
    }

    section {
        padding: 2rem;
    }

}

@media(max-width:768px) {

    #menu-bar {
        display: initial;
    }

    header .navbar {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #f7f7f7;
        border-top: .1rem solid rgba(0, 0, 0, .1);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header .navbar.active {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    header .navbar a {
        margin: 1.5rem;
        padding: 1.5rem;
        display: block;
        border: .2rem solid rgba(0, 0, 0, .1);
        border-left: .5rem solid var(--red);
        background: #fff;
    }

}

@media(max-width:450px) {

    html {
        font-size: 50%;
    }

    .order .row form .inputBox input {
        width: 100%;
    }

}
</style>