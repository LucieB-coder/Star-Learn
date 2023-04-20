from sklearn.model_selection import train_test_split
from sklearn import svm
import pickle
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


# Créer et entraîner le modèle SVM
clf = svm.SVC(kernel='linear')
clf.fit(X_train, y_train)

# Prédire les classes pour l'ensemble de test et évaluer les performances
y_pred = clf.predict(X_test)
accuracy = accuracy_score(y_test, y_pred)
print(f"Accuracy: {accuracy:.2%}")

# Sauvegarde du modèle
with open('SiteWeb/ia/svm.pkl', 'wb') as file:
    pickle.dump(clf, file)