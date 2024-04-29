function articleProgress() {
    const progressWrapper = document.querySelector('.article-progress');
    const progressBar = progressWrapper.querySelector('.article-progress-inner');

    window.addEventListener("scroll", () => {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercentage = (scrollTop / totalHeight) * 100;
        const roundedScrollPercentage = scrollPercentage.toFixed(2);
        console.log(roundedScrollPercentage);
        progressBar.style.width = `${roundedScrollPercentage}%`;
    });
}
articleProgress()