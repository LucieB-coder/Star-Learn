
from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import accuracy_score
import pandas as pd

# Charger les données
data = pd.read_csv('File/exoplanetsExo2.csv')
dataTest = pd.read_csv('File/exoplanetsExo2Test.csv')

# Separer les données en X et y
X_train = data.drop('koi_disposition', axis=1)
y_train = data['koi_disposition']

X_test = dataTest.drop('koi_disposition', axis=1)
y_test = dataTest['koi_disposition']

# Initialisation du classificateur KNN avec un nombre de voisins égal à 5
knn = KNeighborsClassifier(n_neighbors=5)

# Entraînement du classificateur sur les données d'apprentissage
knn.fit(X_train, y_train)

# Prédiction des étiquettes pour les données de test
y_pred = knn.predict(X_test)

# Calcul de l'exactitude (accuracy) du modèle
accuracy = accuracy_score(y_test, y_pred)

print("Exactitude (accuracy) du modèle : {:.2f}%".format(accuracy * 100))
