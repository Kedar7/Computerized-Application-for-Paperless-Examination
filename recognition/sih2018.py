"""
Identify / Recognize user based on keystrokes

Before each exam , train for students who would give the exam
Recognize one exam starts

Read password at random

"""

#H. Hold

#DD Key down Key down period

#UD keyup key down

import numpy as np
import pandas as pd
from matplotlib import pyplot as plt
from matplotlib.colors import ListedColormap
from sklearn.model_selection import train_test_split
from sklearn.neural_network import MLPClassifier  # Multi-layer Perceptron
from sklearn import metrics 
from sklearn.preprocessing import StandardScaler
from sklearn.metrics import classification_report


def readKeyStrokeMetrics( databaseType, databaseName , userName , password ):
    return data
    
# Load the data
data = pd.read_csv("DSL-StrongPasswordData.csv", header = 0) # From database 
# Also have database than stores keystrokes of user
# Python code that connects to database , retrive metrics


# Restart the index
data = data.reset_index()

# Take the unique IDs field 'subject'
# list users, unique subject
unisub = list(data['subject'].unique())

# Creates sequential numerical ID
mlist = [int(x) for x in range(len(unisub))]

# Binds the numerical Id with the 'subject' field
newvalue = dict(zip(unisub, mlist))
data['subject'] = data['subject'].map(newvalue)

# Divide the data set using the 70:30 ratio
train, test = train_test_split(data, test_size = 0.2, random_state=42)

# list only the features
features = list(data.columns[2:])

X = train[features]
y = train['subject']

X_test = test[features]
y_test = test['subject']

#Pre processes the data
scaler = StandardScaler()
scaler.fit(X)

scaler.transform(X)
scaler.transform(X_test)

net = MLPClassifier(random_state=42,hidden_layer_sizes=(84, ),max_iter=600,activation= 'relu', learning_rate= 'invscaling', solver='adam')

net.fit(X,y)

# predict the output using the test data on the learned model
predicted_output = net.predict(X_test)

model_accuracy = metrics.accuracy_score(y_test, predicted_output)

print('Accuracy of Model:',model_accuracy)


