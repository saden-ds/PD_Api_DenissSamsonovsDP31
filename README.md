- Kas ir API?
funkciju un procedūru kopums, kas ļauj izveidot lietojumprogrammas, kas piekļūst operētājsistēmas, lietojumprogrammas vai cita pakalpojuma līdzekļiem vai datiem.

- Kā deklarēt mainīgo PHP valodā?

PHP mainīgais sākas ar $ zīmi, kam seko mainīgā nosaukums.
PHP nav komandas mainīgā deklarēšanai, un datu tips ir atkarīgs no mainīgā vērtības.

- Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā

One of Laravel's key features is its Model-View-Controller (MVC) architecture. This architecture separates business logic from presentation logic, making the code cleaner, and easier to manage, and easier to maintain. Model: represents the data structure, usually mapping to database tables.

- Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM (Object Relational Mapping) ir programmēšanas tehnika, kas ļauj izstrādātājiem mijiedarboties ar datu bāzi, izmantojot objektorientētas programmēšanas koncepcijas, nerakstot neapstrādātus SQL vaicājumus.

- Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra
$lietotaji = User::where('rating', '>', 4)->get();