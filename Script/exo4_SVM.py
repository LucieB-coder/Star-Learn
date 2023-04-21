from sklearn.model_selection import train_test_split
from sklearn import svm

from sklearn.metrics import accuracy_score, precision_score, f1_score
import pandas as pd
import time

# Charger les données
data = pd.read_csv('File/exoplanetsExo2.csv')
dataTest = pd.read_csv('File/exoplanetsExo2Test.csv')

# Separer les données en X et y
X_train = data.drop('koi_disposition', axis=1)
y_train = data['koi_disposition']

X_test = dataTest.drop('koi_disposition', axis=1)
y_test = dataTest['koi_disposition']


# Créer et entraîner le modèle SVM
clf = svm.SVC(kernel='linear')

start = time.time()
clf.fit(X_train, y_train)

# Prédire les classes pour l'ensemble de test et évaluer les performances
y_pred = clf.predict(X_test)

end = time.time()
elapsed = end - start

# Évaluer les performances du modèle en utilisant l'exactitude
accuracy = accuracy_score(y_test, y_pred)
precision = precision_score(y_test, y_pred, average= None)
f1_score = f1_score(y_test, y_pred, average= None)

# Nombre d'échantillon par classe
y_confirmed = [i for i in y_test if i == 1]
y_candidate = [i for i in y_test if i == 2]
y_falsepositive = [i for i in y_test if i == 0]

# Temps d'éxecution
print ("Temps d'éxecution : {:.2f}ms".format(elapsed))

# Accuracy du modèle
print("Exactitude (accuracy) du modèle : {:.2f}%".format(accuracy * 100))
print()
# Précision du modèle
print("Precision pour confirmed: {:.2f}%".format(precision[1] * 100))
print("Precision pour candidate: {:.2f}%".format(precision[2] * 100))
print("Precision pour false positive: {:.2f}%".format(precision[0] * 100))

print ("Precision du modèle: {:.2f}%".format((precision[1] * len(y_confirmed) + precision[2] * len(y_candidate) + precision[0] * len(y_falsepositive)) / len(y_test) * 100))
print()
# F1_score du modèle
print("F1_score pour confirmed: {:.2f}%".format(f1_score[1] * 100))
print("F1_score pour candidate: {:.2f}%".format(f1_score[2] * 100))
print("F1_score pour false positive: {:.2f}%".format(f1_score[0] * 100))

print ("F1_score du modèle: {:.2f}%".format((f1_score[1] * len(y_confirmed) + f1_score[2] * len(y_candidate) + f1_score[0] * len(y_falsepositive)) / len(y_test) * 100))
