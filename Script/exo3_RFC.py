from sklearn.ensemble import RandomForestClassifier

import pickle
from sklearn.metrics import accuracy_score
from datetime import datetime
import pandas as pd

# Charger les données
data = pd.read_csv('File/exoplanetsExo2.csv')
dataTest = pd.read_csv('File/exoplanetsExo2Test.csv')

# Separer les données en X et y
X_train = data.drop('koi_disposition', axis=1)
y_train = data['koi_disposition']

X_test = dataTest.drop('koi_disposition', axis=1)
y_test = dataTest['koi_disposition']


# Créer le modèle de forêts aléatoires
rfc = RandomForestClassifier(n_estimators=30, max_depth=10, random_state=42)

# Entraîner le modèle sur les données d'entraînement
rfc.fit(X_train, y_train)

# Prédire les étiquettes des données de test
y_pred = rfc.predict(X_test)

# Évaluer les performances du modèle en utilisant l'exactitude
accuracy = accuracy_score(y_test, y_pred)
print(f'Exactitude du modèle : {accuracy*100:.2f}%')


# Sauvegarde du modèle
with open('SiteWeb/ia/rfc.pkl', 'wb') as file:
    pickle.dump(rfc, file)


