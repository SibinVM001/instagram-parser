const puppeteer = require('puppeteer');

(async () => {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto(process.argv[2]);

    // Wait for image to load
    await page.waitForSelector('article video');

    const imageUrl = await page.evaluate(() => {
        const img = document.querySelector('article video');
        return img.src;
    });

    console.log(imageUrl);

    await browser.close();
})();