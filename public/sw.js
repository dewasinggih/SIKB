// Incrementing OFFLINE_VERSION will kick off the install event and force
// previously cached resources to be updated from the network.
const OFFLINE_VERSION = 1;
const CACHE_NAME = 'KelurahanBedoyo';
// Customize this with a different URL if needed.
const OFFLINE_URL = './offline.html';
var urlsToCache = [
  'offline.html',
  '/',
  '/dasbor',
  '/profil',
  '/pelayanan',
  '/berita',
  '/kontak_kami',
  '/layanankk',
  '/layananktp',
  '/kematian',
  '/pindah',
  '/lahir',
  '/datapegawai',
  '/manifest.json',
  '/favicon.ico',
  '/icon-192x192.png',
  '/icon-256x256.png',
  '/icon-384x384.png',
  '/icon-512x512.png',
  '/img/diling.png',
  '/img/fitri.png',
  '/img/jumlah.png',
  '/img/kematian.png',
  '/img/kk.png',
  '/img/ktp.png',
  '/img/lahir.png',
  '/img/logo.png',
  '/img/pemkal.png',
  '/img/pindah.png',
  '/img/sosd.png',
  '/img/STRUKTURAL PEGAWAI.png',
  '/img/tumpah.png',
  '/img/wajah.png',
  '/img/wajah2.png',
  '/img/wajah3.png',
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Membuka Cache');
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('activate', function(event) {
  var cacheWhitelist = ['KelurahanBedoyo'];
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

self.addEventListener('fetch', function(event) {
  console.log('event fetch dipanggil');
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        if (response) {
          return response;
        }
        return fetch(event.request);
      }
    ).catch(async () => {
      const cache = await caches.open(CACHE_NAME);
      const cachedResponse = await cache.match(OFFLINE_URL);
      return cachedResponse;
    })
  );
});