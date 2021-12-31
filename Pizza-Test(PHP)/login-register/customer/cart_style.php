<style>
:root {
    --red: #ff2600;
}

#scroll-top {
    position: fixed;
    top: -120%;
    right: 2rem;
    padding: .5rem 1.5rem;
    font-size: 2rem;
    background: var(--red);
    color: #fff;
    border-radius: .5rem;
    transition: 1s linear;
    z-index: 1000;
}

#scroll-top.active {
    top: calc(100% - 5rem)
}
</style>