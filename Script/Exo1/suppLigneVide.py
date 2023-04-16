# Traitement des valeurs manquantes
import pandas as pd
import numpy as np
from imblearn.under_sampling import RandomUnderSampler
from collections import Counter
from sklearn.model_selection import train_test_split

# Charger le fichier CSV dans un dataframe
df = pd.read_csv('exoplanets.csv')

#  On traite les valeurs manquantes et les colonnes inutiles
df.dropna( how='all', axis=1, inplace=True)  # On supprime les colonnes ne contenant que des valeurs nulles
df.drop(columns=["kepid","kepoi_name","kepler_name", "koi_pdisposition"], inplace=True) # On supprime les colonnes inutiles
df.dropna(inplace=True) # On supprime les lignes contenant des valeurs manquantes

# Diviser le dataset en training en test set
X = df.drop('koi_disposition', axis=1)
y = df['koi_disposition']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)

# Echantillonnage dans le cas de classes déséquilibrées (undersampling)
print("Nombre d'occurence dans chaque classe (avant undersampling): ", sorted(Counter(y_train).items()))
# Randomly under sample the majority class
rus = RandomUnderSampler(random_state=42)
X_train_rus, y_train_rus= rus.fit_resample(X_train, y_train)
# Check the number of records after under sampling
print("Nombre d'occurence dans chaque classe (après undersampling): ", sorted(Counter(y_train_rus).items()))

