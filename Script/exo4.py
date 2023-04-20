from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import accuracy_score, precision_score, f1_score
import pandas as pd

# Charger les données
data = pd.read_csv('exoplanetsExo2.csv')
dataTest = pd.read_csv('exoplanetsExo2Test.csv')

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

# Calcul de l'accuracy, précision et f1_score du modèle
accuracy = accuracy_score(y_test, y_pred)
precision = precision_score(y_test, y_pred, average= None)
f1_score = f1_score(y_test, y_pred, average= None)

# Nombre d'échantillon par classe
y_confirmed = [i for i in y_test if i == 1]
y_candidate = [i for i in y_test if i == 2]
y_falsepositive = [i for i in y_test if i == 0]

print("Exactitude (accuracy) du modèle : {:.2f}%".format(accuracy * 100))
print()
# Précision du modèle
print("Precision pour confirmed:", precision[1])
print("Precision pour candidate:", precision[2])
print("Precision pour false positive:", precision[0])

print ("Precision du modèle:", (precision[1] * len(y_confirmed) + precision[2] * len(y_candidate) + precision[0] * len(y_falsepositive)) / len(y_test))
print()
# F1_score du modèle
print("F1_score pour confirmed:", f1_score[1])
print("F1_score pour candidate:", f1_score[2])
print("F1_score pour false positive:", f1_score[0])

print ("F1_score du modèle:", (f1_score[1] * len(y_confirmed) + f1_score[2] * len(y_candidate) + f1_score[0] * len(y_falsepositive)) / len(y_test))
