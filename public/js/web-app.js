const apiKey = 'cbe5d6e94a6041e7832e112460c67aff';
const main = document.querySelector('main');
const sourceSelector = document.querySelector('#sourceSelector');
const defaultSource = 'bbc-sport';

window.addEventListener('load', async e => {
	updateNews();
	await updateSources();
	sourceSelector.value = defaultSource;

	sourceSelector.addEventListener('change', e => {
		updateNews(e.target.value);
	});

	if('serviceWorker' in navigator){
		try {
			navigator.serviceWorker.register('sw.js');
			console.log('SW registered');
		} catch (error){
			console.log('SW not registered');
		}
	}
});

async function updateSources()
{
	const res = await fetch(`https://newsapi.org/v2/sources?apiKey=cbe5d6e94a6041e7832e112460c67aff`);
	const json = await res.json();

	sourceSelector.innerHTML = json.sources.map(src => `<option value ="${src.id}">${src.name}</option>`).join('\n');
}

async function updateNews(source = defaultSource)
{
	const res = await fetch(`https://newsapi.org/v2/top-headlines?sources=${source}&apiKey=cbe5d6e94a6041e7832e112460c67aff`);
	const json = await res.json();
	main.innerHTML = json.articles.map(createArticle).join('\n');
}

function createArticle(article){
	return `
		<div class="card card_largest_with_image grid-item">
			<img class="card-img-top" src="${article.urlToImage}" alt="image-news">
			<div class="card-body">
				<div class="card-title"><a href="${article.url}">${article.title}</a></div>
                    <p class="card-text">${article.description}</p>
                <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
            </div>
		</div>
	`;

	
}