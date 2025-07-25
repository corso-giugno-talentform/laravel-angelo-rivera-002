# Blog Responsive con Bootstrap

Questo progetto è un blog completo, realizzato seguendo le istruzioni fornite, che include una parte grafica totalmente responsive e ottimizzata per dispositivi mobili. Ho utilizzato Vue.js come framework principale per la gestione delle rotte e dei componenti, integrando Bootstrap tramite CDN per uno stile moderno e reattivo.

---

## Struttura del progetto

Il progetto si basa con le seguenti caratteristiche principali:

- **Controller**: Gestione delle rotte e dei dati dinamici
- **Layout**: Layout principale con header, footer e area di contenuto
- **Componenti con parametri**: Componenti riutilizzabili con props
- **Named Route**: Navigazione tramite rotte nominate
- **Bootstrap CDN**: Inclusione di Bootstrap via CDN per lo stile e la responsività

---

## Rotte implementate

1. **Homepage (`/`)**  
   - Pagina indice contenente una lista di tutti gli articoli disponibili.
   - Ogni articolo è rappresentato da un componente che mostra titolo, anteprima e link al dettaglio.

2. **Dettaglio articolo (`/article/:$slug`)**  
   - Pagina parametrica che mostra i dettagli di un articolo selezionato.
   - Gli elementi vengono caricati dinamicamente in base alla chiave $slug passata nella route.

---

## Come ho svolto l'esercizio

### 1. Integrazione di Bootstrap CDN

Nel file `main.blade.php`, ho inserito il link CDN di Bootstrap per garantire uno stile moderno e responsive:

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">