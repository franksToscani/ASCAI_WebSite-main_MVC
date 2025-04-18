# ASCAI WebSite

Sito web per l'associazione ASCAI sviluppato in stile MVC in PHP.

## ✅ Funzionalità principali

- Login e logout con sessione (admin e utenti)
- Dashboard amministratore con accesso protetto
- CRUD completo per:
  - Notizie
  - Eventi
  - Utenti
- Gestione accessi tramite ruoli
- Interfaccia responsive con design semplice
- Protezione base da SQL injection tramite prepared statements

## 🛠️ Struttura del progetto

```
ASCAI_WebSite-main_MVC/
├── controller/
├── model/
├── view/
│   ├── auth/
│   ├── eventi/
│   ├── notizie/
│   └── admin/
├── public/
└── index.php
```

## 🚀 Setup

1. Clona il progetto o copialo in `htdocs` di XAMPP
2. Importa il database `ascai.sql` in phpMyAdmin
3. Apri `http://localhost/ASCAI_WebSite-main_MVC`

## 🔐 Credenziali admin di default

- Username: `admin`
- Password: `admin123`

## 📂 Branch di lavoro

Usa branch dedicati per ogni funzionalità (es. `gestione-eventi`, `notifiche`, `profilo-utente`).

---

**Autore**: Progetto sviluppato da [tuo-nome]
